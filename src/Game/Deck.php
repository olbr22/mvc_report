<?php

namespace App\Deck;

use App\Game\Card;

class Deck
{
    private $deck;

    public function __construct($cards = [])
    {
        $this->deck = [];
        $suits = array("Clubs", "Diamonds", "Hearts", "Spades");
        $ranks = array("Ace", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King");

        if ($cards) {
            $this->deck = $cards;
        }

        foreach ($suits as $row => $suit) {
            foreach ($ranks as $col => $rank) {
                $this->deck[] = new Card($suit, $rank, $col, $row);
            }
        }
    }

    public function shuffle()
    {
        shuffle($this->deck);
    }

    public function draw()
    {
        return array_shift($this->deck);
    }

    public function getCards()
    {
        return $this->deck;
    }

    public function getNumCards()
    {
        return count($this->deck);
    }
}
