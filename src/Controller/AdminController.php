<?php

namespace App\Controller;

use App\Repository\VideojuegoRepository;
use App\Repository\UsuarioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Ruta raíz para todas las acciones de este controlador
#[Route('/admin', name: 'app_admin_dashboard')]
class AdminController extends AbstractController
{
    // Método para la página principal del panel de administración
    #[Route('/', name: 'app_admin_index')]
    public function index(VideojuegoRepository $vRepo, UsuarioRepository $uRepo): Response
    {
        // Requisito: Estadísticas para el panel
        // Se inyectan los repositorios para acceder a las funciones de conteo de la base de datos
        return $this->render('admin/index.html.twig', [
            'num_juegos' => $vRepo->count([]), // count([]) devuelve el total de registros de videojuegos
            'num_usuarios' => $uRepo->count([]), // count([]) devuelve el total de usuarios registrados
        ]);
    }
}
