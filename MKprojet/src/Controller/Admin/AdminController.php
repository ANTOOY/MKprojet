<?php

namespace App\Controller\Admin;

use App\Entity\Annonces;
use App\Entity\Images;

use App\Form\AnnoncesType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\UploaderService; 
use Symfony\Component\Form\FileUploadError;

#[Route('/admin/annonces', name: 'admin_annonces_')]
class AdminController extends AbstractController
{
    
    #[Route('/ajout', name: 'ajout', methods: ['GET', 'POST'])]
    public function ajoutannonce(Request $request,  ManagerRegistry $doctrine,UploaderService $uploader): Response

    {
        $entityManager= $doctrine->getManager();
        $annonce = new Annonces;
        $form =$this->createForm(AnnoncesType::class, $annonce);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
        
            $annonce->setActiv(false);

            $imagesFile = $form->get('images')->getData();
            if ($imagesFile) {
                $Filename = $uploader->upload($imagesFile);
                $annonce->setImages( $Filename );
            }

            $entityManager->persist($annonce);
            $entityManager->flush();
              return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
          }

        
      

  
          return $this->render('admin/annonces/ajout.html.twig', [
             'form' => $form->createView(),
          ]);
      }
  
  
        } 
    
    
