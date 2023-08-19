<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\TextileConsumption;
use Doctrine\Persistence\ManagerRegistry;

class TextileConsumptionController extends AbstractController
{
    #[Route('/textile/consumption', name: 'app_textile_consumption')]
    public function index(): Response
    {
        return $this->render('textile_consumption/index.html.twig', [
            'controller_name' => 'TextileConsumptionController',
        ]);
    }

    #[Route('/textile/consumption/add', name: 'textile_consumption_add')]
    public function addFieldToTextileConsumption(
        ManagerRegistry $doctrine
    ): Response {
        $entityManager = $doctrine->getManager();

        $newEntry = new TextileConsumption();
        $newEntry->setYear('2000');
        $newEntry->setMale('2.6');
        $newEntry->setFemale('2.7');
        $newEntry->setUnisex('3.5');
        $newEntry->setHousehold('1.9');
        $newEntry->setTotal('10.7');

        // tell Doctrine you want to (eventually) save the Product
        // (no queries yet)
        $entityManager->persist($newEntry);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved a new entry with id '.$newEntry->getId());
    }
}
