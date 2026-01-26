<?php

namespace App\Controller;

use App\Entity\Videojuego;
use App\Form\VideojuegoType;
use App\Repository\VideojuegoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/videojuego')]
class VideojuegoController extends AbstractController
{
    #[Route('/', name: 'app_videojuego_index', methods: ['GET'])]
    public function index(VideojuegoRepository $videojuegoRepository, Request $request): Response
    {
        $busqueda = $request->query->get('q');
        $categoria = $request->query->get('categoria');

        // Usamos el método de filtros que creamos en el repositorio
        $videojuegos = $videojuegoRepository->findByFiltros($busqueda, $categoria);

        return $this->render('videojuego/index.html.twig', [
            'videojuegos' => $videojuegos,
        ]);
    }

    #[Route('/nuevo', name: 'app_videojuego_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $videojuego = new Videojuego();
        $form = $this->createForm(VideojuegoType::class, $videojuego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($videojuego);
            $entityManager->flush();

            return $this->redirectToRoute('app_videojuego_index');
        }

        return $this->render('videojuego/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/editar', name: 'app_videojuego_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Videojuego $videojuego, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(VideojuegoType::class, $videojuego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_videojuego_index');
        }

        return $this->render('videojuego/edit.html.twig', [
            'videojuego' => $videojuego,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/eliminar', name: 'app_videojuego_delete', methods: ['POST'])]
    public function delete(Request $request, Videojuego $videojuego, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete'.$videojuego->getId(), $request->request->get('_token'))) {
            $entityManager->remove($videojuego);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_videojuego_index');
    }
}
