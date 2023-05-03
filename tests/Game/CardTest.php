<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;

/**
 * Test that object is of instance Card and rank, suit, offsets are correct. The correct card values are set.
 */
class CardTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties.
     */
    public function testCreateCard(): void
    {
        $card = new Card("Spades", "Ace", 1, 1);
        $this->assertInstanceOf(Card::class, $card);

        $res = $card->getSuit();
        $this->assertStringEndsWith($res, "Spades");

        $res = $card->getRank();
        $this->assertStringEndsWith($res, "Ace");

        $res = $card->getValue();
        $this->assertEquals($res, 14);

        $res = $card->getLeftOffset();
        $this->assertEquals($res, 61.6);
        $this->assertIsFloat($res);

        $res = $card->getTopOffset();
        $this->assertEquals($res, 81);
        $this->assertIsInt($res);

        $res = $card->getCardName();
        $this->assertEquals($res, "Spades Ace");
    }



    /**
     * Construct object and verify that the
     * correct card value is returned.
     */
    public function testVerifyCardValue(): void
    {
        $card = new Card("Spades", "Ace", 1, 1);
        $res = $card->getValue();
        $this->assertEquals($res, 14);

        $card = new Card("Spades", "King", 13, 1);
        $res = $card->getValue();
        $this->assertEquals($res, 13);

        $card = new Card("Spades", "Queen", 12, 1);
        $res = $card->getValue();
        $this->assertEquals($res, 12);

        $card = new Card("Spades", "Jack", 11, 1);
        $res = $card->getValue();
        $this->assertEquals($res, 11);

        $card = new Card("Spades", "2", 2, 1);
        $res = $card->getValue();
        $this->assertEquals($res, 2);
    }
}
