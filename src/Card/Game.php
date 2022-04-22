<?php

namespace App\Card;
use App\Card\Player;
use App\Card\Deck;

class Game
{
    private $deck;
    private $player1;
    private $bank;
    private $winner;

    public function __construct()
    {
        $this->deck = new Deck();
        $this->player1 = new Player(1);
        $this->bank = new Player(2);
    }

    public function getPlayers(): string
    {
        return "[{$this->player1->getPlayerId()}]";
    }

    public function getDeck(): array {
        return $this->deck;
    }

    public function drawCardPlayer() {
        $card = $this->deck->draw();
        $this->player1->addToHand($card[0]);
    }

    public function getHandPlayer(): array {
        $hand = $this->player1->getHand();
        return $hand->getCardHand();;
    }

    public function getHandBank(): array {
        if (count($this->getSum()) < 2) {
            $card = $this->deck->draw();
            $this->bank->addToHand($card[0]);
        };
        while ($this->bank->getSum() < 17) {
            $card = $this->deck->draw();
            $this->bank->addToHand($card[0]);
        };
        $hand = $this->bank->getHand();
        return $hand->getCardHand();;
    }

    public function setWinner() {
        $bankSum = $this->bank->getSum();
        $playerSum = $this->player1->getSum();
        if ($bankSum > $playerSum && $bankSum <= 21) {
            $this->winner = $this->bank;
        } elseif ($playerSum <= 21) {
            $this->winner = $this->player1;
        } elseif ($playerSum > 21 && $bankSum > 21) {
            $this->winner = NULL;
        };
    }

    public function getSum(): array
    {
        $sumAll = array();
        $sumPlayer1 = $this->player1->getSum();
        if ($sumPlayer1 > 21) {
            $this->winner = $this->bank;
        };
        array_push($sumAll, $sumPlayer1);
        if ($this->bank->getHand() != NULL) {
            $sumBank = $this->bank->getSum();
            array_push($sumAll, $sumBank);
        };
        return $sumAll;
    }

    public function getWinner(): string {
        $winnerMessage;
        if ($this->winner == NULL) {
            $winnerMessage = "Ingen har vunnit!";
        } elseif ($this->winner == $this->bank) {
            $winnerMessage = "Banken vann!";
        } else {
            $winnerMessage = "Du vann!";
        };
        return $winnerMessage;
    }
}