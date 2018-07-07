<?php

namespace App\Controller\Security;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="security_login")
     * @Template("security/login.html.twig")
     */
    public function loginAction(AuthenticationUtils $helper)
    {
        return [

            // dernier username saisi (si il y en a un)
            'last_username' => $helper->getLastUsername(),
            // La derniere erreur de connexion (si il y en a une)
            'error' => $helper->getLastAuthenticationError(),
        ];
    }

    /**
     * @throws \Exception
     *
     * la route pour se déconnecter
     *
     * @Route("/logout", name="security_logout")
     */
    public function logout(): void
    {
        throw new \Exception("test");
    }
}