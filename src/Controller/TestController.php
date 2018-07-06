<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class TestController extends Controller
{
    /**
     * @Route("/test", name="index")
     * @Template("test/index.html.twig")
     */
    public function index()
    {
        return ['controller_name' => 'TestController'];
    }

    /**
     * @Route("/admin", name="admin")
     * @Template("test/admin.html.twig")
     */
    public function admin()
    {

    }
}
