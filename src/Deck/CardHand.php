<?php

namespace App\Deck;

/**
 * Represents a hand of cards held by a player.
 */
class CardHand
{
    /**
     * @var array An array of cards in the hand.
     */
    private $hand = [];

    /**
     * Draws one or more cards from a deck and adds them to the hand.
     *
     * @param Deck $deck The deck to draw cards from.
     * @param int $num_cards The number of cards to draw (default 1).
     */
    public function draw($deck, $num_cards = 1)
    {
        for ($i = 0; $i < $num_cards; $i++) {
            $this->hand[] = $deck->popCard();
        }
    }

    /**
     * Returns the hand of cards.
     *
     * @return array The hand of cards.
     */
    public function getHand()
    {
        return $this->hand;
    }
}
