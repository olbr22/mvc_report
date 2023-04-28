<?php

namespace App\Game;

use App\Game\Card;
use App\Game\DeckException;

/**
 * Represents a deck of cards.
 */
class Deck
{
    /**
     * @var array<Card> $deck The array of cards in the deck.
     */
    private $deck;

    /**
     * Constructs a new deck of cards.
     *
     * @param array<Card> $cards (optional) An array of Card objects to initialize the deck with.
     */
    public function __construct($cards = [])
    {
        $this->deck = [];
        $suits = array("Clubs", "Diamonds", "Hearts", "Spades");
        $ranks = array("Ace", "2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King");

        if ($cards) {
            $this->deck = $cards;
        } else {
            foreach ($suits as $row => $suit) {
                foreach ($ranks as $col => $rank) {
                    $this->deck[] = new Card($suit, $rank, $col, $row);
                }
            }
        }
    }

    /**
     * Shuffles the deck of cards on place.
     */
    public function shuffle(): void
    {
        shuffle($this->deck);
    }

    /**
     * Draws a card from the top of the deck.
     *
     * @throws DeckException when the deck is empty.
     *
     * @return Card The card that was drawn.
     */
    public function draw(): Card
    {
        $card = array_shift($this->deck);

        if (is_null($card)) {
            throw new DeckException("The deck is empty");
        }

        return $card;
    }

    /**
     * Returns all cards in the deck.
     *
     * @return array<Card> The array of cards in the deck.
     */
    public function getCards(): array
    {
        return $this->deck;
    }

    /**
     * Returns the number of cards in the deck.
     *
     * @return int The number of cards in the deck.
     */
    public function getNumCards(): int
    {
        return count($this->deck);
    }
}
