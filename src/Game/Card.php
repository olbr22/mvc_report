<?php

namespace App\Game;

/**
 * Class represents a playing card with a suit, rank, value, left and right offset
 * which corresponds the card's position on the spread sheet image 'cards.png'.
*/
class Card
{
    /** @var string $suit The suit of the card (e.g. 'Clubs', 'Diamonds', 'Hearts', 'Spades'). */
    private $suit;

    /** @var string $rank The rank of the card (e.g. 'Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'). */
    private $rank;

    /** @var int $value The numerical value of the card (e.g. 14 for an Ace, 13 for a King, etc.). */
    private $value;

    /** @var float $leftOffset The horizontal offset of the card's position on the spread sheet image. */
    private $leftOffset;

    /** @var int $topOffset The vertical offset of the card's position on the spread sheet image. */
    private $topOffset;

    /**
     * Constructs a new `Card` instance with the specified suit, rank, and position.
     * 
     * @param string $suit The suit of the card.
     * @param string $rank The rank of the card.
     * @param int $col The column index of the card's position on the screen.
     * @param int $row The row index of the card's position on the screen.
     */
    public function __construct($suit, $rank, $col, $row)
    {
        $this->suit = $suit;
        $this->rank = $rank;
        $this->getOffset($col, $row);
        $this->setCardValue();
    }

    /**
     * Sets the numerical value of the card based on its rank.
     */
    public function setCardValue(): void
    {
        if ($this->rank == "Ace") {
            $this->value = 14;
        } elseif ($this->rank == "King") {
            $this->value = 13;
        } elseif ($this->rank == "Queen") {
            $this->value = 12;
        } elseif ($this->rank == "Jack") {
            $this->value = 11;
        }

        $this->value = intval($this->rank);
    }

    /**
     * Returns the suit of the card.
     * 
     * @return string The suit of the card.
     */
    public function getSuit(): string
    {
        return $this->suit;
    }

    /**
     * Returns the rank of the card.
     * 
     * @return string The rank of the card.
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Returns the numerical value of the card.
     * 
     * @return int The numerical value of the card.
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Calculates the visual offset of the card's position on the spread sheet image based on the column and row indices.
     * 
     * @param int $col The column index of the card's position on the spread sheet image.
     * @param int $row The row index of the card's position on the spread sheet image.
     */
    public function getOffset($col, $row): void
    {
        $cardWidth = 61.6;
        $cardHeight = 81;
        $this->leftOffset = $cardWidth * $col;
        $this->topOffset = $cardHeight * $row;
    }

    /**
     * Returns the horizontal offset of the card's position.
     * 
     * @return float The numerical value of the horizontal offset.
     */
    public function getLeftOffset(): float
    {
        return $this->leftOffset;
    }

    /**
     * Returns the vertical offset of the card's position.
     * 
     * @return int The numerical value of the vertical offset.
     */
    public function getTopOffset(): int
    {
        return $this->topOffset;
    }

    /**
     * Returns a string that represents the suit and rank of the card in format suit rank.
     * 
     * @return string The suit and rank of the card.
     */
    public function getCardName(): string
    {
        return "{$this->getSuit()} {$this->getRank()}";
    }
}
