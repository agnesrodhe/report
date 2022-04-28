<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Player.
 */
class PlayerTest extends TestCase
{
    /**
     * Create an object and verify that it has the expected properties, with arguments
     */
    public function testCreatePlayer()
    {
        $player = new Player(1);
        $this->assertInstanceOf("\App\Card\Player", $player);

        $res = $player->getPlayerId();
        $this->assertEquals($res, 1);
    }

    /**
     * Test getHand function if the hand is empty
     */
    public function testGetEmptyHand()
    {
        $player = new Player(1);
        $this->assertInstanceOf("\App\Card\Player", $player);

        $res = $player->getHand();
        $this->assertNotInstanceOf("\App\Card\CardHand", $res);
        $this->assertEquals($res, null);
    }

    /**
     * Test to add a Card to players hand if $cards is empty.
     */
    public function testAddCardNoCardHand()
    {
        $player = new Player(1);
        $card = new Card("2", "♥");

        $player->addToHand($card);
        $res = $player->getHand();
        $this->assertInstanceOf("\App\Card\CardHand", $res);

        $cardArray = $res->getCardHand();
        $this->assertCount(1, $cardArray);
    }

    /**
     * Test to add a Card to players hand if $cards is not empty.
     */
    public function testAddCardExistingCardHand()
    {
        $player = new Player(1);
        $card = new Card("2", "♥");
        $card2 = new Card("3", "♥");

        $player->addToHand($card);
        $player->addToHand($card2);
        $res = $player->getHand();

        $cardArray = $res->getCardHand();
        $this->assertCount(2, $cardArray);
    }

    /**
     * Test to get sum from an empty cardhand
     */
    public function testGetSumEmptyCardHand()
    {
        $player = new Player(1);
        $res = $player->getSum();
        $this->assertEquals($res, 0);
    }

    /**
     * Test to get sum from a cardhand with two cards
     */
    public function testGetSumCardHandTwoCards()
    {
        $player = new Player(1);
        $card = new Card("2", "♥");
        $card2 = new Card("3", "♥");

        $player->addToHand($card);
        $player->addToHand($card2);
        $res = $player->getHand();

        $cardArray = $res->getCardHand();
        $this->assertCount(2, $cardArray);

        $res = $player->getSum();
        $this->assertEquals($res, 5);
    }
}
