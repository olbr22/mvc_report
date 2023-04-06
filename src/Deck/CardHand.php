<?php

namespace App\Deck;

class CardHand
{

    private $hand = [];

    public function draw($deck, $num_cards = 1)
    {
        for ($i = 0; $i < $num_cards; $i++)
        {
            $this->hand[] = array_pop($deck);
        }
    }

    public function getHand()
    {
        return $this->hand;
    }
}