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

        foreach($panier as $id => $stock){
            $panierData[] = [
                'product' => $ProductRepository->find($id),
                'stock'=> $stock
            ];

          
        }

       
//---------------------------------------------------------------------------------------------
       $total = 0;

       foreach($panierData as $item )
       {
           $totalitem = $item['product']->getPrice() * $item['stock'];
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

            return $this->redirectToRoute("cart_index");
    }



       /**
     * @Route("/panier/remove/{id}", name="cart_remove")
     */
    public function remove($id,Session $session){
        $panier = $session->get('panier',[]);

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }
        $session->set('panier', $panier);

        return $this->redirectToRoute("cart_index");
    }


}
