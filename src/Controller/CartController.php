<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(Session $session,ProductRepository $ProductRepository )
    {
        $panier = $session->get('panier', []);

        $panierData = [];

        foreach($panier as $id => $quantity){
            $panierData[] = [
                'product' => $ProductRepository->find($id),
                'quantity'=> $quantity
            ];
        }

        return $this->render('cart/index.html.twig', [
            'items'=>$panierData
        ]);
    }

     /**
     * @Route("/panier/add/{id}", name="cart_add")
     */

    public function add($id, Session $session){
            //$session = $session->getSession();

            $panier = $session->get('panier',[]);
            if(!empty($panier[$id])){
                $panier[$id]++;
            }else{
                $panier[$id] = 1;
            }
          
            $session->set('panier', $panier);
            dd($session->get('panier'));
    }

}
