<?php

namespace App\Controller;


use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function index(AnnoncesRepository $annoncesRepo): Response
    {
        return $this->render('articles/index.html.twig', [
            'annonces' => $annoncesRepo->findBy(['activ' =>true], ['created_at' =>'desc']),
        ]);
    }

    

}
