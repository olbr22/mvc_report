<?php

namespace App\Deck;
use App\Deck\Card;

class DeckOfCards
{

    private $SUITS = [
        "diamonds" => "♦",
        "hearts" => "♥",
        "spades" => "♠",
        "clubs" => "♣"
    ];
    private $RANKS = [
        0 => "ace",
        1 => "king",
        2 => "queen",
        3 => "jack",
        4 => "10",
        5 => "9",
        6 => "8",
        7 => "7",
        8 => "6",
        9 => "5",
        10 => "4",
        11 => "3",
        12 => "2"
    ];

    private $deck = [];

    public function __construct()
    {
        $this->deck = null;
    }

    public function createDeck()
    {
        foreach ($this->RANKS as $j => $rank) {
            foreach ($this->SUITS as $i => $suit) {
                $this->deck[] = $rank . $suit;
            }
        }
    }

    public function getDeck()
    {
        return $this->deck;
    }

    public function getDeckString()
    {
        $string = implode(', ', $this->deck);
        return $string;
    }

    public function getNumCards()
    {
        return count($this->deck);
    }

}