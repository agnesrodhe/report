<?php

namespace App\Card;
use App\Card\Player;
use App\Card\Deck;

class Game
{
    private $deck;
    private $player1;
    private $bank;

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

    public function drawCard(): array {
        $card = $this->deck->draw();
        $this->player1->addToHand($card[0]);
        return $card;
    }

    public function getHand(): array {
        $hand = $this->player1->getHand();
        return $hand->getCardHand();;
    }
}