<?php

namespace App\Controller;

use App\Deck\Card;
use App\Deck\CardGraphic;
use App\Deck\CardHand;
use App\Deck\DeckOfCards;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Kmom02Controller extends AbstractController
{
    #[Route("/card", name: "card")]
    public function card(
        SessionInterface $session
    ): Response
    {
        // create a deck of cards
        $session->set("deck", new DeckOfCards());
        // create a hand
        $session->set("hand", new CardHand());

        $data = [
            'deck' => $session->get("deck"),
        ];

        return $this->render('card/card.html.twig', $data);
    }

    #[Route("/card/deck", name: "card_deck")]
    public function deck(
        SessionInterface $session
    ): Response
    {

        $data = [
            'deck' => $session->get("deck"),
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "deck_shuffle")]
    public function deck_shuffle(
        SessionInterface $session
    ): Response
    {

        $data = [
            'deck' => $session->get("deck"),
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "draw_card")]
    public function draw_card(
        SessionInterface $session
    ): Response
    {
        
        $hand = $session->get("hand");
        $deck = $session->get("deck");
        // draw a card from the deck
        $hand->draw($deck);
        $deck_array = $deck->getDeck();

        $data = [
            'deck' => $session->get("deck"),
            'hand' => $session->get("hand"),
        ];

        return $this->render('card/draw.html.twig', $data);
    }
}
