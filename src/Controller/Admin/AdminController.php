<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class TestController
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/", name="admin")
     * @Template("admin/admin.html.twig")
     */
    public function admin()
    {

    }


}
