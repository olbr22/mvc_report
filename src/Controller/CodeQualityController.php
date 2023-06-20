<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * 
 */
class CodeQualityController extends AbstractController
{
    #[Route('/metrics', name: 'metrics')]
    public function index(): Response
    {
        return $this->render('metrics/index.html.twig');
    }
}
