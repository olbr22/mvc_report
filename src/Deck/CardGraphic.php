<?php

namespace App\Deck;

class CardGraphic extends Card
{

    private $left_offset;
    private $top_offset;

    public function __construct($rank, $suit, $col, $row)
    {
        parent::__construct($rank, $suit);
        $this->getOffset($col, $row);
    }

    function getOffset($col, $row)
    {
        $card_width = 61.6;
        $card_height = 81;
        $this->left_offset = $card_width * $col;
        $this->top_offset = $card_height * $row;
    }

    function getLeftOffset()
    {
        return $this->left_offset;
    }

    function getTopOffset()
    {
        return $this->top_offset;
    }

    public function getCardName()
    {
        return "{$this->getRank()}{$this->getSuit()}";
    }
}