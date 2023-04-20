<?php

namespace App\Game;

use App\Game\Card;
use App\Game\Deck;
use App\Game\Hand;

/**
 *  Represents a player with a name and hand.
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
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->hand = new Hand();
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
