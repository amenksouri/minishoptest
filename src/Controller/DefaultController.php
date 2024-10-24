<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(ProductRepository $pr): Response
    {
        //dd($pr->findAll());
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'products' => $pr->findAll(),
        ]);
    }
}
