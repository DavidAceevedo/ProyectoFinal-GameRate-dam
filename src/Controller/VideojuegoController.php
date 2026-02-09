<?php

namespace App\Controller;

use App\Entity\Videojuego;
use App\Entity\Opinion;
use App\Entity\ListaDeseos;
use App\Form\VideojuegoType;
use App\Form\OpinionType;
use App\Repository\VideojuegoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/videojuego')]
class VideojuegoController extends AbstractController
{
    #[Route('/', name: 'videojuego_index', methods: ['GET'])]
    public function index(VideojuegoRepository $repo, Request $request): Response
    {
        $busqueda = $request->query->get('q');

        if ($busqueda) {
            $videojuegos = $repo->createQueryBuilder('v')
                ->where('v.titulo LIKE :q')
                ->setParameter('q', '%'.$busqueda.'%')
                ->getQuery()
                ->getResult();
        } else {
            $videojuegos = $repo->findAll();
        }

        return $this->render('videojuego/index.html.twig', [
            'videojuegos' => $videojuegos,
            'busqueda' => $busqueda,
        ]);
    }

    #[Route('/nuevo', name: 'videojuego_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $videojuego = new Videojuego();
        $form = $this->createForm(VideojuegoType::class, $videojuego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($videojuego);
            $em->flush();
            $this->addFlash('success', '¡Juego añadido correctamente!');
            return $this->redirectToRoute('videojuego_index');
        }

        return $this->render('videojuego/new.html.twig', [
            'videojuego' => $videojuego,
            'form' => $form->createView(),
        ]);
    }

    // --- 1. RUTA FIJA: MI LISTA (DEBE IR ANTES QUE /{id}) ---
    #[Route('/mi-lista', name: 'app_wishlist', methods: ['GET'])]
    public function myWishlist(EntityManagerInterface $em): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        $misDeseos = $em->getRepository(ListaDeseos::class)->findBy([
            'usuario' => $this->getUser()
        ]);

        return $this->render('videojuego/wishlist.html.twig', [
            'deseos' => $misDeseos,
        ]);
    }

    // --- 2. RUTAS DINÁMICAS (CON {id}) ---

    #[Route('/{id}', name: 'videojuego_show', methods: ['GET', 'POST'])]
    public function show(Videojuego $videojuego, Request $request, EntityManagerInterface $em): Response
    {
        $opinion = new Opinion();
        $form = $this->createForm(OpinionType::class, $opinion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $this->getUser()) {
            $opinion->setVideojuego($videojuego);
            $opinion->setAutor($this->getUser());
            $em->persist($opinion);
            $em->flush();
            return $this->redirectToRoute('videojuego_show', ['id' => $videojuego->getId()]);
        }

        return $this->render('videojuego/show.html.twig', [
            'videojuego' => $videojuego,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/deseo', name: 'videojuego_wishlist', methods: ['GET'])]
    public function addToWishlist(Videojuego $videojuego, EntityManagerInterface $em): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        // Evitar duplicados (Opcional pero recomendado)
        $existe = $em->getRepository(ListaDeseos::class)->findOneBy([
            'usuario' => $this->getUser(),
            'videojuego' => $videojuego
        ]);

        if ($existe) {
            $this->addFlash('info', 'Este juego ya está en tu lista');
            return $this->redirectToRoute('videojuego_show', ['id' => $videojuego->getId()]);
        }

        $deseo = new ListaDeseos();
        $deseo->setUsuario($this->getUser());
        $deseo->setVideojuego($videojuego);
        $deseo->setFechaAgregado(new \DateTimeImmutable());

        $em->persist($deseo);
        $em->flush();

        $this->addFlash('success', 'Añadido a tu lista de deseos');
        return $this->redirectToRoute('videojuego_show', ['id' => $videojuego->getId()]);
    }

    #[Route('/{id}/editar', name: 'videojuego_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Videojuego $videojuego, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(VideojuegoType::class, $videojuego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Juego actualizado correctamente');
            return $this->redirectToRoute('videojuego_index');
        }

        return $this->render('videojuego/edit.html.twig', [
            'videojuego' => $videojuego,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/borrar', name: 'videojuego_delete', methods: ['POST'])]
    public function delete(Request $request, Videojuego $videojuego, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$videojuego->getId(), $request->request->get('_token'))) {
            $em->remove($videojuego);
            $em->flush();
            $this->addFlash('danger', 'Juego eliminado');
        }
        return $this->redirectToRoute('videojuego_index');
    }
}
