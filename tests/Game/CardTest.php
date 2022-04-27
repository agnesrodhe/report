<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Create an object and verify that it has the expected properties, with arguments.
     */
    public function testCreateCard()
    {
        $card = new Card("2", "♥");
        $this->assertInstanceOf("\App\Card\Card", $card);

        $res = $card->getColor();
        $this->assertEquals($res, "♥");

        $res = $card->getValue();
        $this->assertEquals($res, "2");
    }
}
