<?php

namespace App\Controller\Admin;


use App\Entity\Annonces;

use App\Repository\AnnoncesRepository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


 #[Route('/admin/annonces', name: 'admin_annonces_')]
 
  

class AnnoncesController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(AnnoncesRepository $annonRepo): Response
    {
        return $this->render('admin/index.html.twig', [
            'annonces' => $annonRepo->findAll(),
        ]);
    }


    #[Route('/activer/{id}', name: 'activer')] 
 
   
    public function activer( Annonces $annonce , EntityManagerInterface $entityManager, ManagerRegistry $doctrine): Response
    {
            
       
        $annonce->setActiv(($annonce->getActiv()) ?false:true);
        $entityManager = $doctrine->getManager();
        $entityManager->persist($annonce);
        $entityManager->flush();
        
        return new Response("true");
        
        
    }

    #[Route('/supprimer/{id}', name: 'supprimer')] 
 
   
    public function supprimer( Annonces $annonce , EntityManagerInterface $entityManager, ManagerRegistry $doctrine): Response
    {
            
       
        
        $entityManager = $doctrine->getManager();
        $entityManager->remove($annonce);
        $entityManager->flush();

        $this->addFlash('message', 'Annonce supprimée avec succès');
        return $this->redirectToRoute('admin_annonces_home');
        
        
        
    }

   
    
    
}
