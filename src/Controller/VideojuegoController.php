<?php

namespace App\Controller;

use App\Entity\Videojuego;
use App\Form\VideojuegoType;
use App\Entity\Opinion;
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
        // Obtenemos lo que el usuario escribe en el buscador
        $busqueda = $request->query->get('q');

        if ($busqueda) {
            // Si hay búsqueda, filtramos por título
            $videojuegos = $repo->findByTitleExample($busqueda);
        } else {
            // Si no, mostramos todos
            $videojuegos = $repo->findAll();
        }

        return $this->render('videojuego/index.html.twig', [
            'videojuegos' => $videojuegos,
            'busqueda' => $busqueda, // Pasamos el término para que se quede escrito en el input
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

    // RUTA PARA EDITAR
    #[Route('/{id}/editar', name: 'videojuego_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Videojuego $videojuego, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(VideojuegoType::class, $videojuego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush(); // Guarda los cambios
            $this->addFlash('success', 'Juego actualizado correctamente');
            return $this->redirectToRoute('videojuego_index');
        }

        return $this->render('videojuego/edit.html.twig', [
            'videojuego' => $videojuego,
            'form' => $form->createView(),
        ]);
    }

    // RUTA PARA BORRAR
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

    // ... imports necesarios (Videojuego, Opinion, OpinionType, etc.)

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


}
