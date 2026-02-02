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

class VideojuegoController extends AbstractController
{
    /**
     * Esta es ahora tu PORTADA (Home).
     * Al entrar en http://127.0.0.1:8000/ verás la lista de juegos.
     */
    #[Route('/', name: 'videojuego_index', methods: ['GET'])]
    public function index(VideojuegoRepository $repo): Response
    {
        return $this->render('videojuego/index.html.twig', [
            'videojuegos' => $repo->findAll(),
        ]);
    }

    /**
     * Ruta para crear un nuevo videojuego.
     */
    #[Route('/videojuego/nuevo', name: 'videojuego_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $videojuego = new Videojuego();
        $form = $this->createForm(VideojuegoType::class, $videojuego);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($videojuego);
                $em->flush();

                $this->addFlash('success', '¡Videojuego guardado correctamente!');
                return $this->redirectToRoute('videojuego_index');
            } else {
                // Si hay errores de validación, los mandamos a la vista
                $this->addFlash('error', 'Hay errores en el formulario.');
            }
        }

        return $this->render('videojuego/new.html.twig', [
            'form' => $form->createView(),
            'videojuego' => $videojuego,
        ]);
    }
}
