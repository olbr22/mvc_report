<?php

namespace App\Game;

use App\Game\Card;
use App\Game\Hand;

class Bank
{
    private $hand;

    public function __construct()
    {
        $this->hand = new Hand();
    }

    public function hit($deck)
    {
        while ($this->hand->getValue() < 17) {
            $this->hand->addCard($deck->draw());
        }
    }

    public function getHand() {
        return $this->hand;
    }

    public function clearHand() {
        $this->hand->clearCards();
    }
}