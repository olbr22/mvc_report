<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Kmom01Controller extends AbstractController
{
    #[Route("/", name: "presentation")]
    public function presentation(): Response
    {
        $my_name = 'Olha Bruce';

        $data = [
            'name' => $my_name
        ];

        return $this->render('presentation.html.twig', $data);
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

}
