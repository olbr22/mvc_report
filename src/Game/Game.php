<?php

namespace App\Game;

// use App\Game\Card;
use App\Game\Deck;
use App\Game\Hand;
use App\Game\Player;
use App\Game\Bank;

class Game
{
    public $player;
    public $bank;
    public $deck;

    public function __construct($playerName)
    {
        $this->player = new Player($playerName);
        $this->bank = new Bank();
        $this->deck = new Deck();
    }

    public function start()
    {
        $this->deck->shuffle();
    }

    public function play($choice)
    {
        if ($this->player->getHand()->getValue() < 21) {
            if ($choice === 'hit') {
                $this->player->getHand()->addCard($this->deck->draw());
            } else if ($choice === 'stand') {
                $this->bank->hit($this->deck);
            }
        }
    }

    public function end() {
        $this->bank->getHand()->clearCards();
        $this->player->getHand()->clearCards();
    }
}