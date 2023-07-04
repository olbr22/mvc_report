<?php

namespace App\Game;

use PHPUnit\Framework\TestCase;

/**
 * Test that object is of instance Game and attributes player, bank, deck are correct.
 */
class GameTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties.
     */
    public function testCreateGameNoArguments(): void
    {
        $game = new Game();
        $this->assertInstanceOf(Game::class, $game);

        $this->assertInstanceOf(Player::class, $game->getPlayer());

        $this->assertInstanceOf(Bank::class, $game->getBank());

        $this->assertInstanceOf(Deck::class, $game->getDeck());
    }



    /**
     * Construct object and verify that the players name is correct.
     */
    public function testCreateGameWithArguments(): void
    {
        $game = new Game("Kalle Anka");
        $this->assertInstanceOf(Game::class, $game);

        $this->assertIsString($game->getPlayer()->getName());

        $this->assertStringEndsWith("Kalle Anka", $game->getPlayer()->getName());
    }




    /**
     * Construct object and verify that the start method calls the Decks shuffle method once.
     */
    public function testStartGameMethod(): void
    {
        $deckMock = $this->getMockBuilder(Deck::class)
        ->getMock();

        // Set an expectation that the shuffle method will be called once
        $deckMock->expects($this->once())
        ->method('shuffle');

        // Create a new instance of the Game class with the mock Deck
        $game = new Game("Pop Eye", $deckMock);

        // Call the start method of the Game class
        $game->start();
    }



    /**
     * Verify play method when hand value is < than 21 and choice is 'hit'.
     */
    public function testPlayWithValueLess21ChoiceHit(): void
    {
        // Create a mock object of the Deck class
        $mockDeck = $this->getMockBuilder(Deck::class)->getMock();

        // Mock draw method. Draw method will return new Card
        $mockDeck->method('draw')->willReturn(new Card("Spades", "Ace", 1, 1));

       // Create a stub for the Hand class.
        $stub = $this->createMock(Hand::class);

       // Configure the stub.
        $stub->method('getValue')
            ->willReturn(17);

        // Create a new instance of the Game class with the mock Deck
        $game = new Game("Pop Eye", $mockDeck);

        // Call the play method of the Game class
        $game->play('hit');

        // Assert that players hand contains Card object (Spades Ace)
        $res = $game->getPlayer()->getHand()->getCards();
        $this->assertEquals("Spades Ace", $res[0]->getCardName());
    }



    /**
     * Verify play method when hand value is < than 21 and choice is 'stand'.
     */
    public function testPlayWithValueLess21ChoiceStand(): void
    {
        // Create a mock object of the Bank class
        $mockBank = $this->getMockBuilder(Bank::class)->getMock();
        // Set an expectation that the hit method will be called once
        $mockBank->expects($this->once())
        ->method('hit');

        // Create a stub for the Hand class.
        $stub = $this->createMock(Hand::class);
        // Configure the stub.
        $stub->method('getValue')
            ->willReturn(17);

        // Create a new instance of the Game class
        $game = new Game("Pop Eye", null, $mockBank);

        $this->assertInstanceOf(Player::class, $game->getPlayer());

        $this->assertInstanceOf(Bank::class, $game->getBank());

        $this->assertInstanceOf(Deck::class, $game->getDeck());

        // Call the play method of the Game class
        $game->play('stand');
    }

    /**
     * Verify that the end method clears the hand.
     */
    public function testEnd(): void
    {
        // Create a mock object of the Bank class
        $mockHand = $this->getMockBuilder(Hand::class)->getMock();
        // Set an expectation that the hit method will be called once
        $mockHand->method('getCards')->willReturn([]);

        // Create a new instance of the Game class
        $game = new Game("Pop Eye", null, null);

        $this->assertInstanceOf(Player::class, $game->getPlayer());

        $this->assertInstanceOf(Bank::class, $game->getBank());

        $this->assertInstanceOf(Deck::class, $game->getDeck());

        // Call the play method of the Game class
        $game->end();

        // check if the bank's hand is []
        $bank = $game->getBank();
        $banksHand = $bank->getHand();
        $res = $banksHand->getCards();

        // assert that the bank's hand is an empty array
        $this->assertEmpty($res);
    }

    /**
     * Verify that the end method clears the hand.
     */
    public function testDetermineFlashMessage(): void
    {
        // Create a mock object of the Bank class
        $mockHand = $this->getMockBuilder(Hand::class)->getMock();
        // Set an expectation that the hit method will be called once
        $mockHand->method('getCards')->willReturn([]);

        // Create a new instance of the Game class
        $game = new Game("Pop Eye", null, null);

        $this->assertInstanceOf(Player::class, $game->getPlayer());

        $this->assertInstanceOf(Bank::class, $game->getBank());

        $this->assertInstanceOf(Deck::class, $game->getDeck());

        // Call the play method of the Game class
        $game->end();

        // check if the bank's hand is []
        $bank = $game->getBank();
        $banksHand = $bank->getHand();
        $res = $banksHand->getCards();

        // assert that the bank's hand is an empty array
        $this->assertEmpty($res);

        // when bank's value is bigger 21
        $playersValue = 19;
        $bankValue = 23;
        $res = $game->determineFlashMessage($playersValue, $bankValue);
        $this->assertNotEmpty($res);
        $this->assertContains('Banken har spruckit!', $res);

        // when bank's value is less that player's value
        $playersValue = 20;
        $bankValue = 19;
        $res = $game->determineFlashMessage($playersValue, $bankValue);
        $this->assertNotEmpty($res);
        $this->assertContains('Grattis! Du vann!', $res);

        // when player's value is less than bank's value
        $playersValue = 17;
        $bankValue = 19;
        $res = $game->determineFlashMessage($playersValue, $bankValue);
        $this->assertNotEmpty($res);
        $this->assertContains('Banken har större hand! Du förlorade!', $res);

        // when player's value = bank's value and not 0
        $playersValue = 19;
        $bankValue = 19;
        $res = $game->determineFlashMessage($playersValue, $bankValue);
        $this->assertNotEmpty($res);
        $this->assertContains('Det är lika mellan er! Du förlorade!', $res);

        // when player's value = bank's value and not 0
        $playersValue = 0;
        $bankValue = 0;
        $res = $game->determineFlashMessage($playersValue, $bankValue);
        $this->assertNull($res);
    }
}
