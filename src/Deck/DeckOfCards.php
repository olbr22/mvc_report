<?php

namespace App\Deck;

use App\Deck\Card;
use Exception;

/**
 * The DeckOfCards class represents a standard deck of playing cards.
 * The deck is initially created in sorted order (by suit and rank).
 */
class DeckOfCards
{
    /**
     * @var array<string> $suits An array of the four possible suits for a card.
     */
    private $suits = [
        0 => "spades",
        1 => "clubs",
        2 => "diamonds",
        3 => "hearts",
    ];

    /**
     * @var array<string> $ranks An array of the 13 possible ranks for a card.
     */
    private $ranks = [
        0 => "ace",
        1 => "2",
        2 => "3",
        3 => "4",
        4 => "5",
        5 => "6",
        6 => "7",
        7 => "8",
        8 => "9",
        9 => "10",
        10 => "jack",
        11 => "queen",
        12 => "king",
    ];

    /**
     * @var array<Card> $deck An array of cards representing the deck.
     */
    private $deck = [];

    /**
     * Constructs a new DeckOfCards object.
     * If an array of cards is provided as a parameter, the deck is initialized
     * with those cards. Otherwise, the deck is created in sorted order.
     *
     * @param array<Card> $cards (optional) An array of Card objects to initialize the deck with.
     */
    public function __construct($cards = [])
    {
        if ($cards) {
            $this->deck = $cards;
        }

        $this->createDeck();
    }

    /**
     * Adds a card to the deck.
     *
     * @param Card $card The Card object to add to the deck.
     */
    public function add(Card $card): void
    {
        $this->deck[] = $card;
    }

    /**
     * Creates a new deck of cards in sorted order.
     * The deck is initialized with one card of each possible suit and rank.
     * Cards are added to the deck in row-major order, from top to bottom and
     * left to right.
     */
    public function createDeck(): void
    {
        foreach ($this->suits as $row => $suit) {
            foreach ($this->ranks as $col => $rank) {
                $this->add(new CardGraphic($rank, $suit, $col, $row));
            }
        }
    }

    /**
     * Returns the current deck of cards.
     *
     * @return array<Card> An array of Card objects representing the deck.
     */
    public function getDeck(): array
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

    /**
     * Removes and returns a card from the deck.
     * The card is removed from the end of the deck array.
     *
     * @return Card The top card from the deck.
     */
    public function popCard(): Card
    {
        $card = array_pop($this->deck);
        if (is_null($card)) {
            throw new Exception("The deck is empty");
        }
        return $card;
    }

    /**
     * Shuffles the deck of cards.
     * This function randomizes the order of the cards in the deck.
     */
    public function shuffle(): void
    {
        shuffle($this->deck);
    }
}
