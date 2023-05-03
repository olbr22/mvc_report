<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Deck.
 */
class DeckExceptionTest extends TestCase
{
    /**
     * Verify DeckException when there is no cards in the deck.
     */
    public function testDeckExceptionRaisedNoCardsInTheDeck(): void
    {

        $this->expectException(DeckException::class);
        $cards = [new Card("Spades", "Ace", 1, 1)];
        $deck = new Deck($cards);

        $res = $deck->getNumCards();
        $this->assertEquals($res, 1);

        for ($i = 0; $i <= 1; $i++) {
            $deck->draw();
        }

    }

}
