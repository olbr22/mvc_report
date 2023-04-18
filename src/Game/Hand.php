<?php

namespace App\Game;

class Hand
{
    private $cards;

    public function __construct()
    {
        $this->cards = [];
    }

    public function addCard($card)
    {
        $this->cards[] = $card;
    }

    public function getValue()
    {
        $value = 0;
        $numAces = 0;

        foreach ($this->cards as $card) {
            $value += $card->getValue();

            if ($card->getRank() == "Ace") {
                $numAces++;
            }
        }

        while ($numAces > 0 && $value > 21) {
            $value -= 13;
            $numAces--;
        }

        return $value;
    }

    public function getCards()
    {
        return $this->cards;
    }
}
