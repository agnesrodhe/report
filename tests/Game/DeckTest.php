<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Deck.
 */
class DeckTest extends TestCase
{
    /**
     * Create an object and verify that it has the expected properties, no arguments.
     */
    public function testCreateDeckNoArguments()
    {
        $deck = new Deck();
        $this->assertInstanceOf("\App\Card\Deck", $deck);

        $res = $deck->getDeck();
        $this->assertNotNull($res[0]);

        $res = $deck->getDeck();
        $this->assertEquals(count($res), 52);
    }

    /**
     * Create an object and verify that it has the expected properties, with arguments.
     */
    public function testCreateDeckWithArguments()
    {
        $cards = ["1", "2", "3"];
        $deck = new Deck($cards);
        $this->assertInstanceOf("\App\Card\Deck", $deck);

        $res = $deck->getDeck();
        $this->assertNotNull($res[0]);
    }

    /**
     * Test if deck get shuffled by checking if the three first cards is not the same in two decks.
     */
    public function testIfShuffled()
    {
        $deck = new Deck();
        $shuffledDeck = new Deck();

        $res = $deck->getDeck();
        $res2 = $shuffledDeck->shuffleDeck();
        $this->assertNotEquals($res[0], $res2[0]);

        $res = $deck->getDeck();
        $res2 = $shuffledDeck->getDeck();
        $this->assertNotEquals($res[1], $res2[1]);

        $res = $deck->getDeck();
        $res2 = $shuffledDeck->getDeck();
        $this->assertNotEquals($res[2], $res2[2]);
    }

    /**
     * Draw a card from the deck, check if return value is an array with one element, no arguments.
     */
    public function testDrawCardNoArguments()
    {
        $deck = new Deck();

        $res = $deck->draw();
        $this->assertIsObject($res[0]);

        $res = $deck->getDeck();
        $this->assertEquals(count($res), 51);
    }

    /**
     * Draw three card from the deck, check if return value is an array with three element, with arguments.
     */
    public function testDrawCardWithArguments()
    {
        $deck = new Deck();

        $res = $deck->draw(3);
        $this->assertIsObject($res[0]);
        $this->assertIsObject($res[1]);
        $this->assertIsObject($res[2]);

        $res = $deck->getDeck();
        $this->assertEquals(count($res), 49);
    }
}
