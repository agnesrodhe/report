<?php

/**
 * This file contains the class Game and is written by me, Agnes Rodhe.
 */

namespace App\Card;

use App\Card\Card;

/**
 * The class Deck represents a deck of cards.
 */
class Deck
{
    /**
     * Deck parameter
     *
     * @var array
     */
    protected $deck = array();

    /**
     * If no arguments is sent in this constructor create an array with 52 cards
     * If arguments is sent in, the deck is the argument.
     */
    public function __construct($deck = array())
    {
        $card = null;
        if ($deck == null) {
            foreach (array("♥", "♣", "♦", "♠") as $color) {
                for ($x = 1; $x <= 13; $x++) {
                    if ($x == 1) {
                        $card = new Card("A", $color);
                    } elseif ($x == 11) {
                        $card = new Card("J", $color);
                    } elseif ($x == 12) {
                        $card = new Card("Q", $color);
                    } elseif ($x == 13) {
                        $card = new Card("K", $color);
                    } elseif ($x < 11) {
                        $card = new Card(strval($x), $color);
                    }
                    $deck[] = $card;
                };
            };
        }
        $this->deck = $deck;
    }

    /**
     * This function returns the deck as an array
     */
    public function getDeck(): array
    {
        return $this->deck;
    }

    /**
     * This function shuffle the deck and then return the deck as an array
     */
    public function shuffleDeck(): array
    {
        shuffle($this->deck);
        return $this->deck;
    }

    /**
     * This function shuffle the deck and then draws the amount of cards as the argument sent in says.
     * If no argument is sent in, only one card is drawn from the deck.
     * Return value is an array with the card/cards.
     */
    public function draw(int $number = 1): array
    {
        shuffle($this->deck);
        $cardDrawedArray = array();
        for ($x = 0; $x < $number; $x++) {
            $cardDrawed = array_pop($this->deck);
            array_push($cardDrawedArray, $cardDrawed);
        };

        return $cardDrawedArray;
    }
}
