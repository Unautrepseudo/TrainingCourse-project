<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ModeDePaiementController extends AbstractController
{
    /**
     * @Route("/mode/de/paiement", name="mode_de_paiement")
     */
    public function index()
    {
        return $this->render('mode_de_paiement/index.html.twig', [
            'controller_name' => 'ModeDePaiementController',
        ]);
    }
}
