<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaieFinaleController extends AbstractController
{
    /**
     * @Route("/paie/finale", name="paie_finale")
     */
    public function index()
    {
        return $this->render('paie_finale/index.html.twig', [
            'controller_name' => 'PaieFinaleController',
        ]);
    }
}
