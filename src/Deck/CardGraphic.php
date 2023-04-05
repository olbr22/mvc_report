<?php

namespace App\Deck;

class CardGraphic extends Card
{

    private $SUITS = [
        "diamonds" => "♦",
        "hearts" => "♥",
        "spades" => "♠",
        "clubs" => "♣"
    ];

    public function __construct($rank, $suit)
    {
        parent::__construct($rank, $suit);
    }

    public function getCardName()
    {
        return "[{$this->getRank()}{$this->SUITS[$this->getSuit()]}]";
    }
}