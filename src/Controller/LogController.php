<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LogController extends AbstractController
{
    /**
     * @Route("/log", name="log")
     */
    public function index()
    {
        return $this->render('log/index.html.twig', [
            'controller_name' => 'LogController',
        ]);
    }
}
