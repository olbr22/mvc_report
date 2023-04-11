<?php

namespace App\Controller;

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
    public function testSession(SessionInterface $session)
    {
        // Set a value in the session
        $session->set('test_key', 'test_value');

        // Retrieve the value from the session
        $value = $session->get('test_key');

        // Check if the retrieved value is equal to the original value
        if ($value === 'test_value') {
            echo 'SessionInterface is working!';
        } else {
            echo 'SessionInterface is not working.';
        }
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
        $my_deck = new DeckOfCards();
        $my_hand = new CardHand();
        // create a deck of cards
        $session->set('deck', $my_deck);
        // create a hand
        $session->set('hand', $my_hand);

        if (!$my_deck) {
            $my_deck = new DeckOfCards();
            $session->set('deck', $my_deck);
        }

        $data = [
            'deck' => $session->get('deck')
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "deck_shuffle")]
    public function deck_shuffle(
        SessionInterface $session
    ): Response {

        $my_deck = $session->get('deck');

        if (!$my_deck) {
            $my_deck = new DeckOfCards();
            $session->set('deck', $my_deck);
        }

        $my_deck->shuffle();

        $data = [
            'deck' => $my_deck
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "draw_card")]
    public function draw_card(
        SessionInterface $session
    ): Response {

        $my_hand = $session->get('hand');
        $my_deck = $session->get('deck');

        if (!$my_deck) {
            $my_deck = new DeckOfCards();
            $session->set('deck', $my_deck);
        }

        if (!$my_hand) {
            $my_hand = new CardHand();
            $session->set('hand', $my_hand);
        }
        // draw a card from the deck
        $my_hand->draw($my_deck);

        $session->set('hand', $my_hand);

        $data = [
            'deck' => $session->get('deck'),
            'hand' => $my_hand
        ];

        return $this->render('card/draw.html.twig', $data);
    }

    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_num_cards")]
    public function draw_num_cards(
        SessionInterface $session,
        int $num
    ): Response {
        $my_hand = $session->get('hand');
        $my_deck = $session->get('deck');

        if (!$my_deck) {
            $my_deck = new DeckOfCards();
            $session->set('deck', $my_deck);
        }

        if (!$my_hand) {
            $my_hand = new CardHand();
            $session->set('hand', $my_hand);
        }

        if ($my_deck->getNumCards() < $num) {
            throw new \Exception("Det finns inte tillräckligt med kort i kortleken! Antal kort i kortleken {$deck->getNumCards()}, du vill dra {$num}.");
        }

        // draw a card from the deck
        $my_hand->draw($my_deck, $num);

        $data = [
            'deck' => $session->get('deck'),
            'hand' => $session->get('hand')
        ];

        return $this->render('card/draw_num_cards.html.twig', $data);
    }

    #[Route("/card/deck/deal/{num_players<\d+>}/{num_cards<\d+>}", name: "deal")]
    public function deal(
        SessionInterface $session,
        int $num_players,
        int $num_cards
    ): Response {

        $my_deck = $session->get('deck');

        if (!$my_deck) {
            $my_deck = new DeckOfCards();
            $session->set('deck', $my_deck);
        }

        if (($num_players * $num_cards) > $my_deck->getNumCards()) {
            throw new \Exception("Det finns inte tillräckligt med kort i kortleken! Antal kort i kortleken {$deck->getNumCards()}.");
        }

        // create array with players/hand and give them x cards
        $players = array();
        for ($i = 1; $i <= $num_players; $i++) {
            $players["player" . $i] = new CardHand();
            $players["player" . $i]->draw($my_deck, $num_cards);
        }

        $data = [
            'deck' => $session->get('deck'),
            'players' => $players
        ];

        return $this->render('card/deal.html.twig', $data);
    }
}
