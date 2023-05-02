<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;

/**
 * Test that object is of instance Bank. Test create object with and without argument. The the class methods.
 */
class BankTest extends TestCase
{
    /**
     * Construct object and verify its instance.
     */
    public function testCreateBank()
    {
        $bank = new Bank();
        $this->assertInstanceOf(Bank::class, $bank);

        // Assert that the value of the 'hand' property is not null
        $this->assertNotNull($bank->getHand());
    }



    /**
     * Construct object and verify that cards have been added to the hand and that hand value is 17.
     */
    public function testHitMethod()
    {
        $bank = new Bank();
        $this->assertInstanceOf(Bank::class, $bank);

        // Create a deck with 2 cards with value of 20
        $deck = new Deck([new Card("Spades", "Ace", 1, 1), new Card("Spades", "3", 1, 3), new Card("Hearts", "3", 3, 4)]);

        // Call the hit() method
        $bank->hit($deck);

        // Assert that the hand property has been updated and hand value is 17
        $this->assertEquals(17, $bank->getHand()->getValue());
    }



    /**
     * Construct object and verify that the banks hand is empty after calling clearHand().
     */
    public function testClearHandMethod()
    {
        $bank = new Bank();
        $this->assertInstanceOf(Bank::class, $bank);

        // Create a deck with 2 cards with value of 20
        $deck = new Deck([new Card("Spades", "Ace", 1, 1), new Card("Spades", "3", 1, 3), new Card("Hearts", "3", 3, 4)]);

        // Call the hit() method
        $bank->hit($deck);

        // Assert that the hand property has been updated and hand value is 17
        $this->assertEquals(17, $bank->getHand()->getValue());

        // Call the clearHand() method
        $bank->clearHand();

        // Assert that the hand is empty of cards
        $this->assertEmpty($bank->getHand()->getCards());
    }

}