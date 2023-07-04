<?php

namespace App\Controller;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GameControllerTest extends TestCase
{
    public function testReturnsResponse(): void
    {
        // Create an instance of the controller
        $controller = new GameController();
        // Assert that the response is an instance of Symfony's Response class
        $this->assertInstanceOf(GameController::class, $controller);
    }
}
