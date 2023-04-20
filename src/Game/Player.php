<?php

namespace App\Game;

use App\Game\Card;
use App\Game\Deck;
use App\Game\Hand;

class Player
{
    private $name;
    private $hand;

    public function __construct($name)
    {
        $this->name = $name;
        $this->hand = new Hand();
    }

    public function hit($deck)
    {
        $this->hand->addCard($deck->draw());
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHand()
    {
        return $this->hand;
    }

    public function clearHand()
    {
        $this->hand->clearCards();
    }
}
