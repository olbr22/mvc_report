<?php

namespace App\Deck;

class Card
{
    private $rank;
    private $suit;

    public function __construct($rank, $suit)
    {
        $this->rank = $rank;
        $this->suit = $suit;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function getCardName()
    {
        return $this->rank . " of " . $this->suit;
    }
}