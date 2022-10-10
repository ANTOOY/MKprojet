<?php

namespace App\Controller;

use App\Entity\Invoice;
use App\Entity\Purchase;
use App\Form\InvoiceType;
use App\Repository\AnnoncesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceController extends AbstractController
{
    #[Route('/invoice', name: 'invoice')]
    public function index(): Response
    {
        return $this->render('invoice/index.html.twig', [
            'controller_name' => 'InvoiceController',
        ]);
    }


    #[Route('/invoice/new', name: 'invoice_new', methods: ['GET', 'POST'])]
    public function ajoutannonce(Request $request,  ManagerRegistry $doctrine, SessionInterface $session, AnnoncesRepository $productRepo): Response

    {
        $entityManager= $doctrine->getManager();
        $invoice = new Invoice();
        $users = $this->getUser();
        if ($users) {
            $invoice->setFirstname($users->getFirstname())
            ->setName($users->getName());
        }
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


        $form =$this->createForm(InvoiceType::class, $invoice);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
           
            $entityManager= $doctrine->getManager();
            $invoice->setTotalPrice($total)
                 ->setPaid(false)
                 ->setStripeSuccessKey(uniqid());

            $entityManager->persist($invoice);
            foreach($panier as $id => $qty) {
                $product = $productRepo-> find($id);
                $purchase = new Purchase;
                $purchase->setInvoice($invoice)
                    ->setProduct($product)
                    ->setUnitPrice($product->getPrice())
                    ->setQuantity($qty);
                $entityManager->persist($purchase);
            }
           
            $entityManager->flush();

            return $this->redirectToRoute('stripe_checkout', ["invoice" => $invoice->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('invoice/new.html.twig', [
            'invoice' => $invoice,
            'form' => $form->createView(),
            'PanierProduct'  => $fullPanier,
            'total' => $total,
        ]);
    }
}
