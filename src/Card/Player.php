<?php

namespace App\Card;

use App\Card\CardHand;

class Player
{
    private int $playerId;
    private $cards;

    public function __construct(int $idPlayer)
    {
        $this->playerId = $idPlayer;
    }

    public function getPlayerId(): int
    {
        return $this->playerId;
    }

    public function addToHand(Card $card)
    {
        if ($this->cards == null) {
            $this->cards = new CardHand();
        };
        $this->cards->addCard($card);
    }

    public function getHand()
    {
        return $this->cards;
    }
}
