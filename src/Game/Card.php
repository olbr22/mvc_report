<?php

namespace App\Game;

class Card
{
    private $suit;
    private $rank;
    private $value;
    private $left_offset;
    private $top_offset;

    public function __construct($suit, $rank, $col, $row)
    {
        $this->suit = $suit;
        $this->rank = $rank;
        $this->getOffset($col, $row);
        $this->setCardValue();
    }

    public function setCardValue()
    {
        if ($this->rank == "Ace") {
            $this->value = 14;
        } else if ($this->rank == "King") {
            $this->value = 13;
        } else if ($this->rank == "Queen") {
            $this->value = 12;
        } else if ($this->rank == "Jack") {
            $this->value = 11;
        } else {
            $this->value = intval($this->rank);
        }
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
        return $this->value;
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
