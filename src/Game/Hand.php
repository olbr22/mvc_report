<?php

namespace App\Game;

use App\Game\Card;

/**
 * Represents a collection of cards in a card game.
 */
class Hand
{
    /** @var array<Card> $cards An array of Card objects representing the cards in the hand. */
    private $cards;


    /**
     * Initializes an empty array.
     */
    public function __construct()
    {
        $this->cards = [];
    }

    /**
     * Adds a card to the hand.
     *
     * @param Card $card The card to add to the hand.
     */
    public function addCard($card): void
    {
        $this->cards[] = $card;
    }

    /**
     * Calculates the total value of the hand.
     *
     * @return int The total value of the hand.
     */
    public function getValue(): int
    {
        $value = 0;
        $numAces = 0;

        foreach ($this->cards as $card) {
            $value += $card->getValue();

            if ($card->getRank() == "Ace") {
                $numAces++;
            }
        }

        while ($numAces > 0 && $value > 21) {
            $value -= 13;
            $numAces--;
        }

        return $value;
    }

    /**
     * Returns the array of cards in the hand.
     *
     * @return array<Card> The array of Card objects representing the cards in the hand.
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * Removes all cards from the hand.
     */
    public function clearCards(): void
    {
        $this->cards = [];
    }
}
