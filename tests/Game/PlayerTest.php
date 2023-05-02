<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;

/**
 * Test that object is of instance Player. Test create object with and without argument. The the class methods.
 */
class PlayerTest extends TestCase
{
    /**
     * Construct object without argument.
     */
    public function testCreatePlayerNoArgument()
    {
        $player = new Player();
        $this->assertInstanceOf(Player::class, $player);

        $res = $player->getName();
        $this->assertEquals("", $res);
    }

    /**
     * Construct object with argument.
     */
    public function testCreatePlayerWithArgument()
    {
        $player = new Player("Kalle Anka");
        $this->assertInstanceOf(Player::class, $player);

        $res = $player->getName();
        $this->assertEquals("Kalle Anka", $res);
    }

    /**
     * Construct object and verify the hand property holds an object of instance Hand.
     */
    public function testVerifyHandPropertyOfInstanceHand()
    {
        $player = new Player();

        $res = $player->getHand();
        $this->assertInstanceOf(Hand::class, $res);
    }

    /**
     * Construct object and verify the clearHand method empties the hand of cards.
     */
    public function testClearHandMethod()
    {
        // Create a mock object of the Deck class
        $mockDeck = $this->getMockBuilder(Deck::class)->getMock();

        // Mock draw method. Draw method will return new Card
        $mockDeck->method('draw')->willReturn(new Card("Spades", "Ace", 1, 1));

        $card = $mockDeck->draw();

        $player = new Player();
        $deck = new Deck();
        // Take a card
        $player->hit($deck);
        $hand = $player->getHand();
        // Get cards in the hand
        $res = $hand->getCards();
        // Clear hand
        $player->clearHand();

        // Get hand object
        $hand = $player->getHand();
        // Get cards in the hand
        $res = $hand->getCards();
        // Assert that res is an array
        $this->assertIsArray($res);
        // Assert that res is empty
        $this->assertEmpty($res);
    }
}