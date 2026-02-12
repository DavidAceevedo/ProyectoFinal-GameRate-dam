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
    // Listado general con funcionalidad de búsqueda
    #[Route('/', name: 'videojuego_index', methods: ['GET'])]
    public function index(VideojuegoRepository $repo, Request $request): Response
    {
        // Capturamos el parámetro 'q' de la URL para filtrar
        $busqueda = $request->query->get('q');

        if ($busqueda) {
            // Consulta personalizada con QueryBuilder para buscar por título (LIKE)
            $videojuegos = $repo->createQueryBuilder('v')
                ->where('v.titulo LIKE :q')
                ->setParameter('q', '%'.$busqueda.'%')
                ->getQuery()
                ->getResult();
        } else {
            // Si no hay búsqueda, recuperamos todos los registros
            $videojuegos = $repo->findAll();
        }

        return $this->render('videojuego/index.html.twig', [
            'videojuegos' => $videojuegos,
            'busqueda' => $busqueda,
        ]);
    }

    // Creación de un nuevo videojuego
    #[Route('/nuevo', name: 'videojuego_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $videojuego = new Videojuego();
        $form = $this->createForm(VideojuegoType::class, $videojuego);
        $form->handleRequest($request);

        // Validación y persistencia en la base de datos
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
    // Gestión de la lista de deseos personal del usuario logueado
    #[Route('/mi-lista', name: 'app_wishlist', methods: ['GET'])]
    public function myWishlist(EntityManagerInterface $em): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        // Filtramos la lista de deseos por el ID del usuario actual
        $misDeseos = $em->getRepository(ListaDeseos::class)->findBy([
            'usuario' => $this->getUser()
        ]);

        return $this->render('videojuego/wishlist.html.twig', [
            'deseos' => $misDeseos,
        ]);
    }

    // --- 2. RUTAS DINÁMICAS (CON {id}) ---

    // Ficha del videojuego y gestión de comentarios
    #[Route('/{id}', name: 'videojuego_show', methods: ['GET', 'POST'])]
    public function show(Videojuego $videojuego, Request $request, EntityManagerInterface $em): Response
    {
        $opinion = new Opinion();
        $form = $this->createForm(OpinionType::class, $opinion);
        $form->handleRequest($request);

        // Procesamiento del formulario de opinión (solo para usuarios autenticados)
        if ($form->isSubmitted() && $form->isValid() && $this->getUser()) {
            $opinion->setVideojuego($videojuego); // Relación ManyToOne con el juego actual
            $opinion->setAutor($this->getUser()); // Relación ManyToOne con el usuario actual

            // Lógica para asignar fecha de creación si el método existe en la entidad
            if (method_exists($opinion, 'setFecha')) {
                $opinion->setFecha(new \DateTime());
            }

            $em->persist($opinion);
            $em->flush();

            $this->addFlash('success', '¡Tu opinión ha sido publicada!');
            return $this->redirectToRoute('videojuego_show', ['id' => $videojuego->getId()]);
        }

        return $this->render('videojuego/show.html.twig', [
            'videojuego' => $videojuego,
            'form' => $form->createView(),
        ]);
    }

    // Acción para añadir un juego a la lista de deseos (ManyToMany / Tabla intermedia)
    #[Route('/{id}/deseo', name: 'videojuego_wishlist', methods: ['GET'])]
    public function addToWishlist(Videojuego $videojuego, EntityManagerInterface $em): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        // Evitar duplicados comprobando si el vínculo ya existe
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

    // Edición de información existente
    #[Route('/{id}/editar', name: 'videojuego_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Videojuego $videojuego, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(VideojuegoType::class, $videojuego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush(); // Sincroniza los cambios con la DB
            $this->addFlash('success', 'Juego actualizado correctamente');
            return $this->redirectToRoute('videojuego_index');
        }

        return $this->render('videojuego/edit.html.twig', [
            'videojuego' => $videojuego,
            'form' => $form->createView(),
        ]);
    }

    // Eliminación de un registro mediante método POST y protección CSRF
    #[Route('/{id}/borrar', name: 'videojuego_delete', methods: ['POST'])]
    public function delete(Request $request, Videojuego $videojuego, EntityManagerInterface $em): Response
    {
        // Verificación del token de seguridad para evitar borrados malintencionados
        if ($this->isCsrfTokenValid('delete'.$videojuego->getId(), $request->request->get('_token'))) {
            $em->remove($videojuego);
            $em->flush();
            $this->addFlash('danger', 'Juego eliminado');
        }
        return $this->redirectToRoute('videojuego_index');
    }
}
