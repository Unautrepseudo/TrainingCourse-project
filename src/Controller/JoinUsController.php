<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JoinUsController extends AbstractController
{
    /**
     * @Route("/join/us", name="join_us")
     */
    public function index()
    {
        return $this->render('join_us/index.html.twig', [
            'controller_name' => 'JoinUsController',
        ]);
    }
}
