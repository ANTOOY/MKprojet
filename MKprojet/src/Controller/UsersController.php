<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Form\AnnoncesType;
use App\Service\UploaderService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/users', name: 'app_users')]
    public function index(): Response
    {
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }

    // #[Route('/users/annonces/ajout', name: 'users_annonces_ajout', methods: ['GET', 'POST'])]
    // public function ajoutannonce(Request $request,  ManagerRegistry $doctrine,UploaderService $uploader): Response

    // {
    //     $entityManager= $doctrine->getManager();
    //     $annonce = new Annonces;
    //     $form =$this->createForm(AnnoncesType::class, $annonce);

    //     $form->handleRequest($request);
    //     if($form->isSubmitted() && $form->isValid()){
    //         $annonce->setUsers($this->getUser());
    //         $annonce->setActiv(false);

    //         $imagesFile = $form->get('images')->getData();
    //         if ($imagesFile) {
    //             $Filename = $uploader->upload($imagesFile);
    //             $annonce->setImages( $Filename );
    //         }

    //         $entityManager->persist($annonce);
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_users', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('users/annonces/ajout.html.twig', [
    //         'form' => $form->createView()
    //     ]);
    // }
}
