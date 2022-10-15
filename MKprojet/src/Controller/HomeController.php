<?php

namespace App\Controller;

use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        if($request->request->all()){
            $email = new Email();
            $email->to(new Address("studios.mk45@gmail.com", "MK.Studios"))
            ->from($request->request->get("email"))
            ->subject($request->request->get("subject"))
            ->text($request->request->get("message"));
            $mailer->send($email);
            $this->addFlash('success','Votre message a bien été envoyé');
            return $this->redirectToRoute("app_home");

        }


        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    
}