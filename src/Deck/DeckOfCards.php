<?php

namespace App\Deck;

use App\Deck\Card;

class DeckOfCards
{
    private $SUITS = [
        0 => "spades",
        1 => "clubs",
        2 => "diamonds",
        3 => "hearts",
    ];

    private $RANKS = [
        0 => "ace",
        1 => "2",
        2 => "3",
        3 => "4",
        4 => "5",
        5 => "6",
        6 => "7",
        7 => "8",
        8 => "9",
        9 => "10",
        10 => "jack",
        11 => "queen",
        12 => "king",
    ];

    private $deck;

    public function __construct($cards = [])
    {
        if ($cards) {
            $this->deck = $cards;
        } else {
            $this->createDeck();
        }
    }

    public function add(Card $card)
    {
        $this->deck[] = $card;
    }

    public function createDeck()
    {
        foreach ($this->SUITS as $row => $suit) {
            foreach ($this->RANKS as $col => $rank) {
                $this->add(new CardGraphic($rank, $suit, $col, $row));
            }
        }
    }

    public function getDeck()
    {
        return $this->deck;
    }

    public function getNumCards()
    {
        return count($this->deck);
    }

    public function popCard()
    {
        return array_pop($this->deck);
    }

    public function shuffle()
    {
        shuffle($this->deck);
    }
}
