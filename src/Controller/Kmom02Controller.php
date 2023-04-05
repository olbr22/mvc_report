<?php

namespace App\Controller;

use App\Deck\Card;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Kmom02Controller extends AbstractController
{
    #[Route("/card", name: "card")]
    public function card(): Response
    {
        $my_card = new Card('Ace', 'spade');

        $data = [
            'card' => $my_card->getCardName()
        ];

        return $this->render('card/card.html.twig', $data);
    }
}
