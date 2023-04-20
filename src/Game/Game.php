<?php

namespace App\Game;

// use App\Game\Card;
use App\Game\Deck;
use App\Game\Hand;
use App\Game\Player;
use App\Game\Bank;

/**
 * Represents a game with player, bank and deck.
 */
class Game
{
    /**
     * @var Player The player in the game.
     */
    public $player;

    /**
     * @var Bank The bank in the game.
     */
    public $bank;

    /**
     * @var Deck The deck of cards used in the game.
     */
    public $deck;

    /**
     * Initializes a new instance of the Game class.
     *
     * @param string $playerName The name of the player.
     */
    public function __construct($playerName)
    {
        $this->player = new Player($playerName);
        $this->bank = new Bank();
        $this->deck = new Deck();
    }

    /**
     * Shuffles the deck of cards.
     */
    public function start(): void
    {
        $this->deck->shuffle();
    }

    /**
     * Plays a round of the game.
     *
     * @param string $choice The player's choice ('hit' or 'stand').
     */
    public function play($choice): void
    {
        if ($this->player->getHand()->getValue() < 21) {
            if ($choice === 'hit') {
                $this->player->getHand()->addCard($this->deck->draw());
            } elseif ($choice === 'stand') {
                $this->bank->hit($this->deck);
            }
        }
    }

    /**
     * Clears the player's and the bank's hand.
     */
    public function end(): void
    {
        $this->bank->getHand()->clearCards();
        $this->player->getHand()->clearCards();
    }
}
