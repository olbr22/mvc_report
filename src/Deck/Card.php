<?php

namespace App\Deck;

/**
 * Represents a playing card with a rank and suit.
*/
class Card
{
    /**
     * The rank of the card.
     * @var string
    */
    private $rank;

    /**
     * The suit of the card.
     * @var string
    */
    private $suit;

    /**
     * Constructs a new Card object with the given rank and suit.
     * @param string $rank The rank of the card.
     * @param string $suit The suit of the card.
    */
    public function __construct($rank, $suit)
    {
        $this->rank = $rank;
        $this->suit = $suit;
    }

    /**
     * Returns the rank of the card.
     * @return string The rank of the card.
    */
    public function getRank()
    {
        return $this->rank;
    }


    /**
     * Returns the suit of the card.
     * @return string The suit of the card.
    */
    public function getSuit()
    {
        return $this->suit;
    }

    /**
     * Returns the name of the card in the format "[ rank of suit ]".
     * @return string The name of the card.
    */
    public function getCardName()
    {
        return "[ " . $this->rank . " of " . $this->suit . " ]";
    }
}
