<?php

namespace App\Deck;

use App\Deck\Card;

/**
 * The DeckOfCards class represents a standard deck of playing cards.
 * The deck is initially created in sorted order (by suit and rank).
 */
class DeckOfCards
{
    /**
     * @var array $SUITS An array of the four possible suits for a card.
     */
    private $SUITS = [
        0 => "spades",
        1 => "clubs",
        2 => "diamonds",
        3 => "hearts",
    ];

    /**
     * @var array $RANKS An array of the 13 possible ranks for a card.
     */
    private $RANKS = [
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
     * @var array $deck An array of cards representing the deck.
     */
    private $deck = [];

    /**
     * Constructs a new DeckOfCards object.
     * If an array of cards is provided as a parameter, the deck is initialized
     * with those cards. Otherwise, the deck is created in sorted order.
     *
     * @param array $cards (optional) An array of Card objects to initialize the deck with.
     */
    public function __construct($cards = [])
    {
        if ($cards) {
            $this->deck = $cards;
        } else {
            $this->createDeck();
        }
    }

    /**
     * Adds a card to the deck.
     *
     * @param Card $card The Card object to add to the deck.
     */
    public function add(Card $card)
    {
        $this->deck[] = $card;
    }

    /**
     * Creates a new deck of cards in sorted order.
     * The deck is initialized with one card of each possible suit and rank.
     * Cards are added to the deck in row-major order, from top to bottom and
     * left to right.
     */
    public function createDeck()
    {
        foreach ($this->SUITS as $row => $suit) {
            foreach ($this->RANKS as $col => $rank) {
                $this->add(new CardGraphic($rank, $suit, $col, $row));
            }
        }
    }

    /**
     * Returns the current deck of cards.
     *
     * @return array An array of Card objects representing the deck.
     */
    public function getDeck()
    {
        return $this->deck;
    }

    /**
     * Returns the number of cards in the deck.
     *
     * @return int The number of cards in the deck.
     */
    public function getNumCards()
    {
        return count($this->deck);
    }

    /**
     * Removes and returns a card from the deck.
     * The card is removed from the end of the deck array.
     *
     * @return Card The top card from the deck.
     */
    public function popCard()
    {
        return array_pop($this->deck);
    }

    /**
     * Shuffles the deck of cards.
     * This function randomizes the order of the cards in the deck.
     */
    public function shuffle()
    {
        shuffle($this->deck);
    }
}
