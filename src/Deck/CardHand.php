<?php

namespace App\Deck;

/**
 * Represents a hand of cards held by a player.
 */
class CardHand
{
    /**
     * @var array<Card> An array of cards in the hand.
     */
    private $hand = [];

    /**
     * Draws one or more cards from a deck and adds them to the hand.
     *
     * @param DeckOfCards $deck The deck to draw cards from.
     * @param int $numCards The number of cards to draw (default 1).
     */
    public function draw($deck, $numCards = 1): void
    {
        for ($i = 0; $i < $numCards; $i++) {
            $this->hand[] = $deck->popCard();
        }
    }

    /**
     * Returns the hand of cards.
     *
     * @return array<Card> The hand of cards.
     */
    public function getHand(): array
    {
        return $this->hand;
    }
}
