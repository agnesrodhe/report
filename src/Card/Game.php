<?php

/**
 * This file contains the class Game and is written by me, Agnes Rodhe.
 */

namespace App\Card;

use App\Card\Player;
use App\Card\Deck;

/**
 * The class Game represents a game of 21.
 */
class Game
{
    /**
     * Deck parameter
     *
     * @var Deck
     */
    private $deck;

    /**
     * Player1 parameter
     *
     * @var Player
     */
    private $player1;

    /**
     * Bank parameter
     *
     * @var Player
     */
    private $bank;

    /**
     * Winner parameter
     *
     * @var string
     */
    private $winner;

    /**
     * Create new instances of the variables deck, player1 and bank.
     */
    public function __construct()
    {
        $this->deck = new Deck();
        $this->player1 = new Player(1);
        $this->bank = new Player(2);
    }

    /**
     * Return the deck as an object.
     */
    public function getDeck(): Deck
    {
        return $this->deck;
    }

    /**
     * This function draws a card from the deck and add it to the player1 card hand.
     */
    public function drawCardPlayer()
    {
        $card = $this->deck->draw();
        $this->player1->addToHand($card[0]);
    }

    /**
     * This function returns the player1 card hand as an array.
     */
    public function getHandPlayer(): array
    {
        $hand = $this->player1->getHand();
        return $hand->getCardHand();
        ;
    }

    /**
     * This function draws card by card and add to
     * the bankplayer card hand until the sum is 17 or more. Returns the card hand of the bankplayer.
     */
    public function getHandBank(): array
    {
        if (count($this->getSum()) < 2) {
            $card = $this->deck->draw();
            $this->bank->addToHand($card[0]);
        };
        while ($this->bank->getSum() < 17) {
            $card = $this->deck->draw();
            $this->bank->addToHand($card[0]);
        };
        $hand = $this->bank->getHand();
        return $hand->getCardHand();
        ;
    }

    /**
     * This function compare the sum of the two players hands and set the winner.
     */
    public function setWinner()
    {
        $bankSum = $this->bank->getSum();
        $playerSum = $this->player1->getSum();
        if ($bankSum > $playerSum && $bankSum <= 21) {
            $this->winner = "bank";
        } elseif ($playerSum <= 21) {
            $this->winner = "player1";
        } elseif ($playerSum > 21 && $bankSum > 21) {
            $this->winner = "ingen";
        };
    }

    /**
     * This function returns the sum of the cards for both the player1 and the bankplayer as an array.
     */
    public function getSum(): array
    {
        $sumAll = array();
        $sumPlayer1 = $this->player1->getSum();
        if ($sumPlayer1 > 21) {
            $this->winner = "bank";
        };
        array_push($sumAll, $sumPlayer1);
        if ($this->bank->getHand() != null) {
            $sumBank = $this->bank->getSum();
            array_push($sumAll, $sumBank);
        };
        return $sumAll;
    }

    /**
     * This function returns a winnermessage as a string.
     */
    public function getWinner(): string
    {
        $winnerMessage = "Du vann!";
        if ($this->winner == "ingen") {
            $winnerMessage = "Ingen har vunnit!";
        } elseif ($this->winner == "bank") {
            $winnerMessage = "Banken vann!";
        };
        return $winnerMessage;
    }
}
