<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class PaieFinaleController extends AbstractController
{
    /**
     * @Route("/paie/finale", name="paie_finale")
     */
    public function index(Session $session, ProductRepository $ProductRepository)
    {
        $panier = $session->get('panier', []);

        $panierData = [];

        foreach($panier as $id => $quantity){
            $panierData[] = [
                'product' => $ProductRepository->find($id),
                'quantity'=> $quantity
            ];

          
        }

       
//---------------------------------------------------------------------------------------------
       $total = 0;

       foreach($panierData as $item )
       {
           $totalitem = $item['product']->getPrice() * $item['quantity'];
           $total += $totalitem;

       }

        return $this->render('paie_finale/index.html.twig', [
            'controller_name' => 'PaieFinaleController',
            'items'=>$panierData,
            'total'=>$total 
        ]);
    }
}
