<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConfidentialityController extends AbstractController
{
    /**
     * @Route("/confidentiality", name="confidentiality")
     */
    public function index()
    {
        return $this->render('confidentiality/index.html.twig', [
            'controller_name' => 'ConfidentialityController',
        ]);
    }
}
