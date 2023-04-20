<?php

namespace App\Game;

use App\Game\Card;
use App\Game\Hand;

/**
 * Class represents a bank in the card game 21 'Tjugoet'.
 */
class Bank
{
    /** @var Hand $hand The bank's hand that holds cards. */
    private $hand;

    /**
     * Initializes a new instance of the Bank class.
     */
    public function __construct()
    {
        $this->hand = new Hand();
    }

    /**
     * Draws cards from the specified deck and adds them to the bank's hand until the value of the hand is at least 17.
     * 
     * @param Deck $deck The deck from which to draw cards.
     */
    public function hit($deck): void
    {
        while ($this->hand->getValue() < 17) {
            $this->hand->addCard($deck->draw());
        }
    }

    /**
     * Returns the bank's hand of cards.
     * 
     * @return Hand The bank's hand of cards.
     */
    public function getHand(): Hand
    {
        return $this->hand;
    }

    /**
     * Clears the bank's hand of cards.
     */
    public function clearHand(): void
    {
        $this->hand->clearCards();
    }
}
