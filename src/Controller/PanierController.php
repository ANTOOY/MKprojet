<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/panier')]
class PanierController extends AbstractController
{

    #[Route('/panier/{product}/less', name: 'panier_less')]
    public function less(Annonces $product, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);

        $id = $product->getId();
        if (2 > $panier[$id]){
            unset($panier[$id]);
        } else {
            $panier[$id]--;
        }

         $session->set('panier', $panier);

        return $this->redirectToRoute('panier_voir', [
            'id' => $id,
        ]);
        
        
    }





   

    #[Route('/{product}/remove', name: 'panier_supprimer')]
    public function remove(Annonces $product, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);

        $id = $product->getId();
        
        unset($panier[$id]);

        $session->set('panier', $panier);

        return $this->redirectToRoute('panier_voir', [
            'id' => $id,
        ]);
        

        
    }



    #[Route('/panier/{product}/add', name: 'panier_add')]
    public function add(Annonces $product, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);

        $id = $product->getId();

        if (array_key_exists($id, $panier)) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
        $session->set('panier', $panier);

        

        return $this->redirectToRoute('panier_voir', [
            'id' => $id,
        ]);
        
        
    }


    #[Route('/voir', name: 'panier_voir')]
    public function voir(SessionInterface $session, AnnoncesRepository $productRepo): Response
    {
        $fullPanier = [];
        $total = 0;
        $panier = $session->get('panier', []);
        foreach ($panier as $id=> $qty ) {
            $product = $productRepo-> find($id);
            $fullPanier[] = [
                "product" => $product,
                "qty" => $qty,
            ];
            $total += $product->getPrice() * $qty;
        }
        

        return $this->render('panier/index.html.twig', [
            'PanierProduct'  => $fullPanier,
            'total' => $total,
             
        ]);
        

        
    }
}
