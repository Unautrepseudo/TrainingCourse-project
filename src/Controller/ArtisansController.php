<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArtisansController extends AbstractController
{
    /**
     * @Route("/artisans", name="artisans")
     */
    public function index()
    {
        return $this->render('artisans/index.html.twig', [
            'controller_name' => 'ArtisansController',
        ]);
    }
}

