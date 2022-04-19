<?php

namespace App\Card;

use App\Card\Card;

class CardHand
{
    private $cardHand = [];

    public function addCard(Card $card): void
    {
        array_push($this->cardHand, $card);
    }

    public function getCardHand()
    {
        return $this->cardHand;
    }
}
