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
        // create a Card
        $a_card = new Card("ace", "spades");
        $a_graphic_card = new CardGraphic("hearts", "2", 3, 1);
        $my_deck = new DeckOfCards();
        $my_deck->createDeck();
        $my_deck->getDeck();
        $my_deck->shuffle();

        $data = [
            'card' => $a_card->getCardName(),
            // 'left' => $a_graphic_card->getLeftOffset(),
            // 'top' => $a_graphic_card->getTopOffset(),
            // 'deck' => var_dump($my_deck->getDeck()),
            'deck' => $my_deck->getDeck(),
            // 'shuffled_deck' => $my_deck->getDeckString(),
            'num_cards' => $my_deck->getNumCards(),
            // 'top' => "-162px",
            // 'left' => "-736.8px",
            // 'array' => $my_deck->getDeck()
        ];

        return $this->render('card/card.html.twig', $data);
    }

    #[Route("/card/deck", name: "card_deck")]
    public function deck(): Response
    {
        // create a deck of cards
        $my_deck = new DeckOfCards();
        $my_deck->createDeck();

        $data = [
            'deck' => $my_deck->getDeck(),
            'num_cards' => $my_deck->getNumCards(),
        ];

        return $this->render('card/deck.html.twig', $data);
    }
}
