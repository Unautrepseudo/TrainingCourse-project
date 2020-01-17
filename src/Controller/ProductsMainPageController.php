<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class productsmainepage extends AbstractController
{
    /**
     * @Route("/products/main/page", name="productsmainepage")
     */
    public function index()
    {
        return $this->render('team/index.html.twig', [
            'controller_name' => 'productsmainepage',
        ]);
    }
}
