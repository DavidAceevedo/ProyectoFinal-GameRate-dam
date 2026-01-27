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
    #[Route('/', name: 'videojuego_index')]
    public function index(VideojuegoRepository $repo): Response
    {
        return $this->render('videojuego/index.html.twig', [
            'videojuegos' => $repo->findAll(),
        ]);
    }
}
