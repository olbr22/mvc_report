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
        $this->bank->clearHand();
        $this->player->clearHand();
    }

    /**
     * Determine the type of the flash message and the message itself
     * based on the player's and bank's hand value.
     *
     * @param int $playerValue The player's hand value.
     * @param int $bankValue The bank's hand value.
     *
     * @return array<string> The type of the flash message and the message itself.
     */
    public function determineFlashMessage($playerValue, $bankValue): ?array
    {
        if ($bankValue > 21) {
            return [
                'type' => 'success',
                'message' => 'Banken har spruckit!'
            ];
        } elseif ($playerValue > $bankValue) {
            return [
                'type' => 'success',
                'message' => 'Grattis! Du vann!'
            ];
        } elseif ($playerValue < $bankValue) {
            return [
                'type' => 'warning',
                'message' => 'Banken har större hand! Du förlorade!'
            ];
        } elseif ($playerValue == $bankValue && $playerValue != 0) {
            return [
                'type' => 'warning',
                'message' => 'Det är lika mellan er! Du förlorade!'
            ];
        }

        return null;
    }
}
