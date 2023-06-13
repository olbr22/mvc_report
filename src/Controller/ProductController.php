<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /* This method creates a new product */
    #[Route('/product/create', name: 'product_create')]
    public function createProduct(
        ManagerRegistry $doctrine
    ): Response {
        $entityManager = $doctrine->getManager();

        $product = new Product();
        $product->setName('Keyboard_num_' . rand(1, 9));
        $product->setValue(rand(100, 999));

        // tell Doctrine you want to (eventually) save the Product
        // (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }

    /* View all products */
    #[Route('/product/show', name: 'product_show_all')]
    public function showAllProduct(
        ProductRepository $productRepository
    ): Response {
        $products = $productRepository
            ->findAll();

        $response = $this->json($products);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    /* View a product by its id */
    #[Route('/product/show/{id}', name: 'product_by_id')]
    public function showProductById(
        ProductRepository $productRepository,
        int $productId
    ): Response {
        $product = $productRepository
            ->find($productId);

        return $this->json($product);
    }

    /* to delete a product by its id */
    // #[Route('/product/delete/{id}', name: 'product_delete_by_id')]
    // public function deleteProductById(
    //     ManagerRegistry $doctrine,
    //     int $productId
    // ): Response
    // {
    //     $entityManager = $doctrine->getManager();
    //     $product = $entityManager->getRepository(Product::class)->find($productId);

    //     if (!$product) {
    //         throw $this->createNotFoundException(
    //             'No product found for id '.$productId
    //         );
    //     }

    //     $entityManager->remove($product);
    //     $entityManager->flush();

    //     return $this->redirectToRoute('product_show_all');
    // }

    #[Route('/product/delete/{id}', name: 'product_delete_by_id')]
    public function deleteProductById(
        ProductRepository $productRepository,
        int $productId
    ): Response {
        $product = $productRepository->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        $productRepository->remove($product, true);

        return $this->redirectToRoute('product_show_all');
    }

    // #[Route('/product/update/{id}/{value}', name: 'product_update')]
    // public function updateProduct(
    //     ManagerRegistry $doctrine,
    //     int $productId,
    //     int $value
    // ): Response {
    //     $entityManager = $doctrine->getManager();
    //     $product = $entityManager->getRepository(Product::class)->find($productId);

    //     if (!$product) {
    //         throw $this->createNotFoundException(
    //             'No product found for id '.$productId
    //         );
    //     }

    //     $product->setValue($value);
    //     $entityManager->flush();

    //     return $this->redirectToRoute('product_show_all');
    // }

    #[Route('/product/update/{id}/{value}', name: 'product_update')]
    public function updateProduct(
        ProductRepository $productRepository,
        int $productId,
        int $value
    ): Response {
        $product = $productRepository->find($productId);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        $product->setValue($value);
        $productRepository->save($product, true);

        return $this->redirectToRoute('product_show_all');
    }
}
