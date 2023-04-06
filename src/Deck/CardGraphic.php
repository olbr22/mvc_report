<?php

namespace App\Deck;

class CardGraphic extends Card
{

    private $left_offset;
    private $top_offset;
    private $col;
    private $row;

    public function __construct($rank, $suit, $col, $row)
    {
        parent::__construct($rank, $suit);
        $this->col = $col;
        $this->row = $row;
        $this->getOffset();
    }

    function getOffset()
    {
        $card_width = 61.6;
        $card_height = 81;
        $this->left_offset = $card_width * $this->col;
        $this->top_offset = $card_height * $this->row;
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
        return "[{$this->getRank()}{$this->SUITS[$this->getSuit()]}]";
    }
}