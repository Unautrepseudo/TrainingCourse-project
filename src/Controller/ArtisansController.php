<?php

namespace App\Controller;

use App\Entity\Artisan;
use App\Form\ArtisanType;
use App\Repository\ArtisanRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtisansController extends AbstractController
{
    /**
     * @Route("/artisans", name="artisans")
     */
    public function index(ArtisanRepository $artisanRepository): Response
    {
        return $this->render('artisans/index.html.twig', [
            'artisans' => $artisanRepository->findAll(),
        ]);
    }
}

