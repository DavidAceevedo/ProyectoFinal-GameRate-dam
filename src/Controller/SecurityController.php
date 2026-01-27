<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si el usuario ya está logueado, lo mandamos al admin
        if ($this->getUser()) {
            return $this->redirectToRoute('app_admin_index');
        }

        // obtener el error de login si existe
        $error = $authenticationUtils->getLastAuthenticationError();
        // último nombre de usuario introducido por el usuario
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Este método nunca se ejecuta, Symfony intercepta la ruta automáticamente
        throw new \LogicException('Este método puede estar vacío; Symfony lo interceptará.');
    }
}
