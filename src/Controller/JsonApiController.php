<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Card\Deck;

class JsonApiController
{
    /**
     * @Route("/card/api/deck", name="json-api")
     */
    public function deckJson(): Response
    {
        $deck = new Deck();
        $deckArray = array();

        foreach ($deck->getDeck() as $card) {
            array_push($deckArray, "{$card->getValue()} {$card->getColor()}");
        };

        $data = [
            'deck' => $deckArray
        ];

        return new JsonResponse($data);
    }
}
