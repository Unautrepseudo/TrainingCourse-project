<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConditionUtilisationController extends AbstractController
{
    /**
     * @Route("/condition/utilisation", name="condition_utilisation")
     */
    public function index()
    {
        return $this->render('condition_utilisation/index.html.twig', [
            'controller_name' => 'ConditionUtilisationController',
        ]);
    }
}
