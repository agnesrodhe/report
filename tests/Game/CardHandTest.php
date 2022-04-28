<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardHand.
 */
class CardHandTest extends TestCase
{
    /**
     * Create an object and verify that it is of the expected class.
     */
    public function testCreateCardHand()
    {
        $cardHand = new CardHand();
        $this->assertInstanceOf("\App\Card\CardHand", $cardHand);
    }

    /**
     * Test if the card hand returns an empty array if no cards has been added.
     */
    public function testGetCardHandEmptyHand()
    {
        $cardHand = new CardHand();
        $this->assertInstanceOf("\App\Card\CardHand", $cardHand);

        $res = $cardHand->getCardHand();
        $this->assertEquals($res, []);
    }

    /**
     * Test if the card hand returns card hand as an array if two cards has been added.
     */
    public function testGetCardHandWithCards()
    {
        $cardHand = new CardHand();
        $this->assertInstanceOf("\App\Card\CardHand", $cardHand);

        $card = new Card("2", "♥");
        $card2 = new Card("3", "♥");

        $cardHand->addCard($card);
        $cardHand->addCard($card2);

        $res = $cardHand->getCardHand();
        $this->assertCount(2, $res);
    }
}
