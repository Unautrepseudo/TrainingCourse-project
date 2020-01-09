<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BijouxController extends AbstractController
{
    /**
     * @Route("/bijoux", name="bijoux")
     */
    public function index()
    {
        return $this->render('bijoux/index.html.twig', [
            'controller_name' => 'BijouxController',
        ]);
    }
}
