<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="cart")
     */
    public function index(Session $session,ProductRepository $ProductRepository)
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
        //dd($panierData);

        return $this->render('cart/index.html.twig', [
            'items'=>$panierData,
            'total'=>$total 
            
        ]);

         
    }

     /**
     * @Route("/panier/add/{id}", name="cart_add")
     */

    public function add($id, Session $session){
            $panier = $session->get('panier',[]);
            
            if(!empty($panier[$id])){
                $panier[$id]++;
            }else{
                $panier[$id] = 1;
            }
            $session->set('panier', $panier);

            return $this->redirectToRoute("cart");
    }



       /**
     * @Route("/panier/{id}", name="cart_remove")
     */
    public function remove($id,Session $session){
        $panier = $session->get('panier',[]);

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session->set('panier', $panier);

        return $this->redirectToRoute("cart");
    }


}
