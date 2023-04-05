<?php

namespace App\Controller;

use App\Deck\Card;
use App\Deck\CardGraphic;
use App\Deck\DeckOfCards;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Kmom02Controller extends AbstractController
{
    #[Route("/card", name: "card")]
    public function card(): Response
    {
        $my_card = new CardGraphic('A', 'spades');
        $my_deck = new DeckOfCards();
        $my_deck->createDeck();
        $length = $my_deck->getNumCards();

        $data = [
            'card' => $my_card->getCardName(),
            'deck' => $my_deck->getDeckString(),
            'num_cards' => $length
        ];

        return $this->render('card/card.html.twig', $data);
    }
}
