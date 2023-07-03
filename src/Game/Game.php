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
    private $player;

    /**
     * @var Bank The bank in the game.
     */
    private $bank;

    /**
     * @var Deck The deck of cards used in the game.
     */
    private $deck;

    /**
     * Initializes a new instance of the Game class.
     *
     * @param string $playerName The name of the player.
     * @param Deck|null $deck The Deck object or null.
     */
    public function __construct($playerName = "", Deck $deck = null, Bank $bank = null)
    {
        $this->player = new Player($playerName);

        $this->bank = $bank ?? new Bank();

        $this->deck = $deck ?? new Deck();
    }

    /**
     * Returns the Player object.
     *
     * @return Player The Player object.
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * Returns the Bank object.
     *
     * @return Bank The Bank object.
     */
    public function getBank(): Bank
    {
        return $this->bank;
    }

    /**
     * Returns the Deck object.
     *
     * @return Deck The Deck object.
     */
    public function getDeck(): Deck
    {
        return $this->deck;
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
