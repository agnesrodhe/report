<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Game.
 */
class GameTest extends TestCase
{
    /**
     * Create an object and verify that it has the expected properties, no arguments.
     */
    public function testCreateGameObject()
    {
        $game = new Game();
        $this->assertInstanceOf("\App\Card\Game", $game);

        $res = $game->getDeck();
        $this->assertInstanceOf("\App\Card\Deck", $res);
    }

    /**
     * Test to draw a card from player1 and get the card.
     */
    public function testDrawCardAndGetCardFromPlayer()
    {
        $game = new Game();
        $game->drawCardPlayer();

        $res = $game->getHandPlayer();
        $this->assertCount(1, $res);
    }

    /**
     * Test to draw cards from bank and get the cards if no cards has been drawn.
     */
    public function testDrawAndGetCardFromBank()
    {
        $game = new Game();
        $res = $game->getHandBank();

        $this->assertIsArray($res);
        $this->assertNotCount(0, $res);
    }

    /**
     * Test set winner to player1
     */
    public function testSetWinnerToPlayer1()
    {
        $game = new Game(21, 19);

        $game->setWinner();
        $res = $game->getWinner();
        $this->assertEquals("player1", $res);
    }

    /**
     * Test set winner to bank
     */
    public function testSetWinnerToBank()
    {
        $game = new Game(20, 21);
        $this->assertInstanceOf("\App\Card\Game", $game);

        $game->setWinner();
        $res = $game->getWinner();
        $this->assertEquals("bank", $res);
    }

    /**
     * Test set winner to no one
     */
    public function testSetWinnerToNoOne()
    {
        $game = new Game(24, 26);
        $this->assertInstanceOf("\App\Card\Game", $game);

        $game->setWinner();
        $res = $game->getWinner();
        $this->assertEquals("ingen", $res);
    }

    /**
     * Test get winnermessage no winner
     */
    public function testGetWinnerMessageNoWinner()
    {
        $game = new Game(24, 26);
        $this->assertInstanceOf("\App\Card\Game", $game);

        $game->setWinner();
        $res = $game->getWinnerMessage();
        $this->assertEquals("Ingen har vunnit!", $res);
    }

    /**
     * Test get winnermessage bank as winner
     */
    public function testGetWinnerMessageBankWinner()
    {
        $game = new Game(18, 20);
        $this->assertInstanceOf("\App\Card\Game", $game);

        $game->setWinner();
        $res = $game->getWinnerMessage();
        $this->assertEquals("Banken vann!", $res);
    }

    /**
     * Test get winnermessage player as winner
     */
    public function testGetWinnerMessagePlayerWinner()
    {
        $game = new Game(18, 17);
        $this->assertInstanceOf("\App\Card\Game", $game);

        $game->setWinner();
        $res = $game->getWinnerMessage();
        $this->assertEquals("Du vann!", $res);
    }

    /**
     * Test get sum Player1
     */
    public function testGetSumPlayer1()
    {
        $game = new Game(22);
        $res = $game->getSum();
        $this->assertCount(1, $res);
    }

    /**
     * Test get sum Player1 and Bank
     */
    public function testGetSumPlayer1AndBank()
    {
        $game = new Game(22);
        $game->getHandBank();
        $res = $game->getSum();
        $this->assertCount(2, $res);
    }
}
