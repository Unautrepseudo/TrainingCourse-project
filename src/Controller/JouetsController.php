<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JouetsController extends AbstractController
{
    /**
     * @Route("/jouets", name="jouets")
     */
    public function index()
    {
        return $this->render('jouets/index.html.twig', [
            'controller_name' => 'JouetsController',
        ]);
    }
}
