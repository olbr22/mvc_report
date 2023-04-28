<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;

/**
 * Test that object is of instance Hand. Test that hand holds Card objects. Test that methods addCard, getValue, getCards and clearCards work correctly.
 */
class HandTest extends TestCase
{
    /**
     * Construct object and verify that the object is an empty array.
     */
    public function testCreateHand()
    {
        $hand = new Hand();
        $this->assertInstanceOf(Hand::class, $hand);

        $res = $hand->getCards();
        $this->assertIsArray($res);

        $res = $hand->getCards();
        $this->assertEmpty($res);
    }



    /**
     * Construct object and verify that Card object can be added to the Hand object.
     */
    public function testAddCardToHand()
    {
        $hand = new Hand();
        $this->assertInstanceOf(Hand::class, $hand);

        $card = new Card("Spades", "Ace", 1, 1);
        $hand->addCard($card);
    }



    /**
     * Construct object and verify that the hand value is correct.
     */
    public function testVerifyHandValue()
    {
        $hand = new Hand();
        $this->assertInstanceOf(Hand::class, $hand);

        $res = $hand->getValue();
        $this->assertEquals(0, $res);

        $card = new Card("Spades", "Ace", 1, 1);
        $hand->addCard($card);

        $res = $hand->getValue();
        $this->assertEquals(14, $res);

        $hand2 = new Hand();
        $this->assertInstanceOf(Hand::class, $hand2);

        $card1 = new Card("Spades", "Ace", 1, 1);
        $hand2->addCard($card1);
        $card2 = new Card("Clubs", "Ace", 1, 2);
        $hand2->addCard($card2);
        $card3 = new Card("Spades", 6, 6, 1);
        $hand2->addCard($card3);

        $res = $hand2->getValue();
        var_dump($res);
        $this->assertEquals(21, $res);
    }



    /**
     * Construct Hand object with 4 Aces and verify that the hand value is correct.
     */
    public function testVerifyHandValueFourAces()
    {
        $hand = new Hand();
        $this->assertInstanceOf(Hand::class, $hand);

        $ace1 = new Card("Spades", "Ace", 1, 1);
        $hand->addCard($ace1);
        $ace2 = new Card("Clubs", "Ace", 1, 2);
        $hand->addCard($ace2);
        $ace3 = new Card("Diamonds", "Ace", 1, 3);
        $hand->addCard($ace3);
        $ace4 = new Card("Hearts", "Ace", 1, 4);
        $hand->addCard($ace4);

        $res = $hand->getValue();
        $this->assertEquals(17, $res);
    }



    /**
     * Construct Hand object add a card/several cards and clear hand of cards, verify the hand is an empty array.
     */
    public function testVerifyClearCards()
    {
        $hand = new Hand();
        $this->assertInstanceOf(Hand::class, $hand);

        $ace1 = new Card("Spades", "Ace", 1, 1);
        $hand->addCard($ace1);
        $ace2 = new Card("Clubs", "Ace", 1, 2);
        $hand->addCard($ace2);
        $ace3 = new Card("Diamonds", "Ace", 1, 3);
        $hand->addCard($ace3);
        $ace4 = new Card("Hearts", "Ace", 1, 4);
        $hand->addCard($ace4);

        $res = $hand->getCards();
        $this->assertNotEmpty($res);

        $res = $hand->clearCards();
        $this->assertEmpty($res);
    }

}