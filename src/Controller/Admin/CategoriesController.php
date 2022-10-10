<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Form\CategoriesType;
use App\Repository\CategoriesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 #[Route('/admin/categories', name: 'admin_categories_')]
 
 
  
  

class CategoriesController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(CategoriesRepository $catsRepo): Response
    {
        return $this->render('admin/categories/index.html.twig', [
            'categories' => $catsRepo->findAll()
        ]);
    }

      #[Route('/ajout', name: 'ajout', methods: ['GET','POST'])]
  public function  ajoutCategorie(Request $request, ManagerRegistry $doctrine ):Response
   
    {
        $entityManager= $doctrine->getManager();
        $categorie= new Categories;
        $form= $this->createForm(CategoriesType::class, $categorie);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
          
            $entityManager->persist($categorie);
            $entityManager->flush();
            return $this->redirectToRoute('admin_categories_home', [], Response::HTTP_SEE_OTHER);
        }
    

        return $this->render('admin/categories/ajout.html.twig', [
           'form' => $form->createView(),
        ]);
    }





      #[Route('/modifier/{id}', name: 'modifier', methods: ['GET','POST'])]
  public function  ModifCategories(Categories $categorie, ManagerRegistry $doctrine, Request $request ):Response
   
    {
        $entityManager= $doctrine->getManager();
        $categorie= new Categories;
        $form= $this->createForm(CategoriesType::class, $categorie);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
          
            $entityManager->persist($categorie);
            $entityManager->flush();
            return $this->redirectToRoute('admin_categories_home', [], Response::HTTP_SEE_OTHER);
        }
    

        return $this->render('admin/categories/ajout.html.twig', [
           'form' => $form->createView(),
        ]);
    }

    
    
}
