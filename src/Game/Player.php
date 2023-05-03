<?php

namespace App\Game;

use App\Game\Card;
use App\Game\Deck;
use App\Game\Hand;

/**
 *  Represents a player with a name and a hand.
 */
class Player
{
    /**
     * @var string $name The name of the player.
     */
    private $name;

    /**
     * @var Hand $hand The player's hand that holds cards.
     */
    private $hand;

    /**
     * Initializes a new instance of the Player class.
     *
     * @param string $name The name of the player.
     * @param Hand|null $hand The hand object.
     */
    public function __construct($name = "", Hand $hand = null)
    {
        $this->name = $name;
        if (is_null($hand)) {
            $this->hand = new Hand();
        }
        if ($hand) {
            $this->hand = $hand;
        }
    }

    /**
     * Add a card to the player's hand.
     *
     * @param Deck $deck The deck to draw a card from.
     */
    public function hit($deck): void
    {
        $this->hand->addCard($deck->draw());
    }

    /**
     * Returns player's name.
     *
     * @return string $name The players name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the player's hand.
     *
     * @return Hand The player's hand.
     */
    public function getHand(): Hand
    {
        return $this->hand;
    }

    /**
     * Clear the player's hand of all cards.
     */
    public function clearHand(): void
    {
        $this->hand->clearCards();
    }
}
