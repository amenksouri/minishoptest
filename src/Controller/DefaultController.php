<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(ProductRepository $pr): Response
    {
        //dd($pr->findAll());
        return $this->render('default/item.html.twig', [
            'controller_name' => 'DefaultController',
            'products' => $pr->findAll(),
        ]);
    }
    #[Route('/item/{id}', name: 'app_item_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }
}
