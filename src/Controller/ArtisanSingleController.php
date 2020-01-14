<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArtisanSingleController extends AbstractController
{
    /**
     * @Route("/artisansingle", name="artisan_single")
     */
    public function index()
    {
        return $this->render('artisan_single/index.html.twig', [
            'controller_name' => 'ArtisanSingleController',
        ]);
    }
}
