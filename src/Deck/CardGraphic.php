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
        return "{$this->getRank()} {$this->getSuit()}";
    }
}
