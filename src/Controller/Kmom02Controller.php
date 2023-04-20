<?php

namespace App\Controller;

use Exception;
use App\Deck\Card;
use App\Deck\CardGraphic;
use App\Deck\CardHand;
use App\Deck\DeckOfCards;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class Kmom02Controller extends AbstractController
{
    public function testSession(SessionInterface $session): void
    {
        // Set a value in the session
        $session->set('test_key', 'test_value');

        // Retrieve the value from the session
        $value = $session->get('test_key');

        // Check if the retrieved value is equal to the original value
        if ($value === 'test_value') {
            echo 'SessionInterface is working!';
        }

        echo 'SessionInterface is not working.';
    }

    #[Route("/card", name: "card")]
    public function card(): Response
    {
        return $this->render('card/card.html.twig');
    }

    #[Route("/card/deck", name: "card_deck", methods: ['GET'])]
    public function deck(
        SessionInterface $session
    ): Response {
        $myDeck = new DeckOfCards();
        $myHand = new CardHand();
        // create a deck of cards
        $session->set('deck', $myDeck);
        // create a hand
        $session->set('hand', $myHand);

        if ($myDeck == []) {
            $myDeck = new DeckOfCards();
            $session->set('deck', $myDeck);
        }

        $data = [
            'deck' => $session->get('deck')
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "deck_shuffle")]
    public function deckShuffle(
        SessionInterface $session
    ): Response {

        /** @var DeckOfCards $myDeck */
        $myDeck = $session->get('deck');

        if ($myDeck == []) {
            $myDeck = new DeckOfCards();
            $session->set('deck', $myDeck);
        }

        $myDeck->shuffle();

        $data = [
            'deck' => $myDeck
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "draw_card")]
    public function drawCard(
        SessionInterface $session
    ): Response {

        /** @var CardHand $myHand */
        $myHand = $session->get('hand');
        /** @var DeckOfCards $myDeck */
        $myDeck = $session->get('deck');

        if ($myDeck == []) {
            $myDeck = new DeckOfCards();
            $session->set('deck', $myDeck);
        }

        if ($myHand == []) {
            $myHand = new CardHand();
            $session->set('hand', $myHand);
        }
        // draw a card from the deck
        $myHand->draw($myDeck);

        $session->set('hand', $myHand);

        $data = [
            'deck' => $session->get('deck'),
            'hand' => $myHand
        ];

        return $this->render('card/draw.html.twig', $data);
    }

    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_num_cards")]
    public function drawNumCards(
        SessionInterface $session,
        int $num
    ): Response {
        /** @var CardHand $myHand */
        $myHand = $session->get('hand');
        /** @var DeckOfCards $myDeck */
        $myDeck = $session->get('deck');

        if ($myDeck == []) {
            $myDeck = new DeckOfCards();
            $session->set('deck', $myDeck);
        }

        if ($myHand == []) {
            $myHand = new CardHand();
            $session->set('hand', $myHand);
        }

        if ($myDeck->getNumCards() < $num) {
            throw new Exception("Det finns inte tillräckligt med kort i kortleken! Antal kort i kortleken {$myDeck->getNumCards()}, du vill dra {$num}.");
        }

        // draw a card from the deck
        $myHand->draw($myDeck, $num);

        $data = [
            'deck' => $session->get('deck'),
            'hand' => $session->get('hand')
        ];

        return $this->render('card/draw_num_cards.html.twig', $data);
    }

    #[Route("/card/deck/deal/{num_players<\d+>}/{num_cards<\d+>}", name: "deal")]
    public function deal(
        SessionInterface $session,
        int $numPlayer,
        int $numCards
    ): Response {

        /** @var DeckOfCards $myDeck */
        $myDeck = $session->get('deck');

        if ($myDeck == []) {
            $myDeck = new DeckOfCards();
            $session->set('deck', $myDeck);
        }

        if (($numPlayer * $numCards) > $myDeck->getNumCards()) {
            throw new Exception("Det finns inte tillräckligt med kort i kortleken! Antal kort i kortleken {$myDeck->getNumCards()}.");
        }

        // create array with players/hand and give them x cards
        $players = array();
        for ($i = 1; $i <= $numPlayer; $i++) {
            $players["player" . $i] = new CardHand();
            $players["player" . $i]->draw($myDeck, $numCards);
        }

        $data = [
            'deck' => $session->get('deck'),
            'players' => $players
        ];

        return $this->render('card/deal.html.twig', $data);
    }
}
