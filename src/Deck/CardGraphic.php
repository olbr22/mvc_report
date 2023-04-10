<?php

namespace App\Deck;

/**
 * Represents a graphical card with a position on a sprite sheet public/img/cards.png.
 */
class CardGraphic extends Card
{
    /**
     * @var int The horizontal offset of the card on the sprite sheet.
     */
    private $left_offset;

    /**
     * @var int The vertical offset of the card on the sprite sheet.
     */
    private $top_offset;

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
    public function getOffset($col, $row)
    {
        $card_width = 61.6;
        $card_height = 81;
        $this->left_offset = $card_width * $col;
        $this->top_offset = $card_height * $row;
    }

    /**
     * Returns the horizontal offset of the card on the sprite sheet.
     *
     * @return int The horizontal offset of the card on the sprite sheet.
     */
    public function getLeftOffset()
    {
        return $this->left_offset;
    }

    /**
     * Returns the vertical offset of the card on the sprite sheet.
     *
     * @return int The vertical offset of the card on the sprite sheet.
     */
    public function getTopOffset()
    {
        return $this->top_offset;
    }

    /**
     * Returns the name of the card in the format "rank suit".
     *
     * @return string The name of the card.
     */
    public function getCardName()
    {
        return "{$this->getRank()} {$this->getSuit()}";
    }
}
