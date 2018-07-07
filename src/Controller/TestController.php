<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class TestController
 * @Route("/test")
 */
class TestController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template("test/index.html.twig")
     */
    public function index()
    {

    }

    /**
     * @Route("/admin", name="admin")
     * @Template("test/admin.html.twig")
     */
    public function admin()
    {

    }
}
