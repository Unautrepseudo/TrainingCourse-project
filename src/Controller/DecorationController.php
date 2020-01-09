<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DecorationController extends AbstractController
{
    /**
     * @Route("/decoration", name="decoration")
     */
    public function index()
    {
        return $this->render('decoration/index.html.twig', [
            'controller_name' => 'DecorationController',
        ]);
    }
}
