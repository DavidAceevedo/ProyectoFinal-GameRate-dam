<?php

namespace App\Controller;

use App\Repository\VideojuegoRepository;
use App\Repository\UsuarioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin', name: 'app_admin_dashboard')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_index')]
    public function index(VideojuegoRepository $vRepo, UsuarioRepository $uRepo): Response
    {
        // Requisito: Estadísticas para el panel
        return $this->render('admin/index.html.twig', [
            'num_juegos' => $vRepo->count([]),
            'num_usuarios' => $uRepo->count([]),
        ]);
    }
}
