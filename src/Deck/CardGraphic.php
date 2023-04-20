<?php

namespace App\Deck;

/**
 * Represents a graphical card with a position on a sprite sheet public/img/cards.png.
 */
class CardGraphic extends Card
{
    /**
     * @var float The horizontal offset of the card on the sprite sheet.
     */
    private $leftOffset;

    /**
     * @var int The vertical offset of the card on the sprite sheet.
     */
    private $topOffset;

    /**
     * Constructs a new CardGraphic object with the given rank, suit, and position.
     *
     * @param string $rank The rank of the card.
     * @param string $suit The suit of the card.
     * @param int $col The column position of the card on sprite sheet.
     * @param int $row The row position of the card on sprite sheet.
     */
    public function __construct($rank, $suit, $col, $row)
    {
        parent::__construct($rank, $suit);
        $this->getOffset($col, $row);
    }

    /**
     * Calculates the offset of the card on the sprite sheet based on its position.
     *
     * @param int $col The column position of the card on the sprite sheet.
     * @param int $row The row position of the card on the sprite sheet.
     */
    public function getOffset($col, $row): void
    {
        $cardWidth = 61.6;
        $cardHeight = 81;
        $this->leftOffset = $cardWidth * $col;
        $this->topOffset = $cardHeight * $row;
    }

    /**
     * Returns the horizontal offset of the card on the sprite sheet.
     *
     * @return float The horizontal offset of the card on the sprite sheet.
     */
    public function getLeftOffset(): float
    {
        return $this->leftOffset;
    }

    /**
     * Returns the vertical offset of the card on the sprite sheet.
     *
     * @return int The vertical offset of the card on the sprite sheet.
     */
    public function getTopOffset(): int
    {
        return $this->topOffset;
    }

    /**
     * Returns the name of the card in the format "rank suit".
     *
     * @return string The name of the card.
     */
    public function getCardName(): string
    {
        return "{$this->getRank()} {$this->getSuit()}";
    }
}
