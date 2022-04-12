<?php

namespace App\Card;

class DeckWith2Jokers extends Deck
{
    private $joker = "🃟";
    public function __construct()
    {
        parent::__construct();
        for ($x = 0; $x < 2; $x++) {
            array_push($this->deck, $this->joker);
        }
    }
}