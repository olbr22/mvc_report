<?php

namespace App\Game;

class Card
{
    private $suit;
    private $rank;
    private $left_offset;
    private $top_offset;

    public function __construct($suit, $rank, $col, $row)
    {
        $this->suit = $suit;
        $this->rank = $rank;
        $this->getOffset($col, $row);
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getValue()
    {
        if ($this->rank == "Ace") {
            return 14;
        } else if ($this->rank == "King") {
            return 13;
        } else if ($this->rank == "Queen") {
            return 12;
        } else if ($this->rank == "Jack") {
            return 11;
        } else {
            return intval($this->rank);
        }
    }

    public function getOffset($col, $row)
    {
        $card_width = 61.6;
        $card_height = 81;
        $this->left_offset = $card_width * $col;
        $this->top_offset = $card_height * $row;
    }

    public function getLeftOffset()
    {
        return $this->left_offset;
    }

    public function getTopOffset()
    {
        return $this->top_offset;
    }

    public function getCardName()
    {
        return "{$this->getSuit()} {$this->getRank()}";
    }
}
