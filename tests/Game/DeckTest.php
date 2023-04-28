<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;

/**
 * Test that object is of instance Deck. That deck holds 52 Card objects, can be shuffled and a card/cards can be drawn.
 */
class DeckTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties.
     */
    public function testCreateDeck()
    {
        $deck = new Deck();
        $this->assertInstanceOf("\App\Game\Deck", $deck);

        $res = $deck->getCards();
        $this->assertIsArray($res);

        $res = $deck->getCards();
        $this->assertContainsOnlyInstancesOf(Card::class, $res);

        $res = $deck->getCards();
        $this->assertCount(52, $res);

        $res = $deck->getNumCards();
        $this->assertEquals(52, $res);
    }



    /**
     * Construct object and verify that the original deck is not equal shuffled deck.
     */
    public function testShuffleDeck()
    {
        $deck = new Deck();
        $originalDeck = $deck->getCards();

        $deck->shuffle();
        $shuffledDeck = $deck->getCards();

        $this->assertNotEquals($originalDeck, $shuffledDeck);
    }



    /**
     * Construct object and verify that the draw method returns an object of instance Card and the number of cards in the deck decreases by one.
     */
    public function testDrawOneCard()
    {
        $deck = new Deck();
        $card = $deck->draw();

        $this->assertInstanceOf(Card::class, $card);

        $res = $deck->getCards();
        $this->assertCount(51, $res);
    }
}