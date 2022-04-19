<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Card\Deck;
use App\Card\DeckWith2Jokers;
use App\Card\Player;

class CardController extends AbstractController
{
    /**
     * @Route("/card", name="card")
     */
    public function card(): Response
    {
        return $this->render('card/card.html.twig');
    }

    /**
     * @Route("/card/deck", name="showDeck")
     */
    public function showDeck(): Response
    {
        $deck = new Deck();
        $data = [
            'title' => 'Deck',
            'deck' => $deck->getDeck(),
        ];
        return $this->render('card/deck.html.twig', $data);
    }

    /**
     * @Route("/card/deck2", name="showDeck2")
     */
    public function showDeck2(): Response
    {
        $deck = new DeckWith2Jokers();
        $data = [
            'title' => 'Deck with jokers',
            'deck' => $deck->getDeck(),
        ];
        return $this->render('card/deck2.html.twig', $data);
    }

    /**
     * @Route("/card/deck/shuffle", name="shuffleDeck")
     */
    public function shuffleDeck(
        SessionInterface $session
    ): Response {
        $session->remove("drawDeck");
        $session->remove("dealDeck");
        $deck = new Deck();

        $data = [
            'title' => 'Deck',
            'deck' => $deck->shuffleDeck(),
        ];
        return $this->render('card/deck.html.twig', $data);
    }

    /**
     * @Route(
     *      "/card/deck/draw",
     *      name="draw-card",
     *      methods={"GET","POST"}
     * )
     */
    public function drawCard(
        SessionInterface $session
    ): Response {
        $drawDeck = $session->get("drawDeck") ?? new Deck();

        $cardDrawed = $drawDeck->draw();
        $data = [
            'cards' => $cardDrawed,
            'left' => count($drawDeck->getDeck()),
        ];
        $session->set("drawDeck", $drawDeck);

        return $this->render('card/draw.html.twig', $data);
    }

    /**
     * @Route(
     *      "/card/deck/draw/{numberCards}",
     *      name="draw-card-number",
     *      methods={"GET","POST"}
     * )
     */
    public function drawCardNumber(
        int $numberCards,
        SessionInterface $session
    ): Response {
        $drawDeck = $session->get("drawDeck") ?? new Deck();
        $numberToDraw = count($drawDeck->getDeck());

        if (count($drawDeck->getDeck()) >= $numberCards) {
            $numberToDraw = $numberCards;
        }
        $cardDrawed = $drawDeck->draw($numberToDraw);

        $data = [
            'cards' => $cardDrawed,
            'left' => count($drawDeck->getDeck()),
        ];
        $session->set("drawDeck", $drawDeck);

        return $this->render('card/draw.html.twig', $data);
    }

    /**
     * @Route(
     *      "/card/deck/deal/{players}/{cards}",
     *      name="deal-cards",
     *      methods={"GET","POST"}
     * )
     */
    public function dealCards(
        int $players,
        int $cards,
        SessionInterface $session
    ): Response {
        $playerArray = array();
        for ($x = 1; $x <= $players; $x++) {
            $player = new Player($x);
            array_push($playerArray, $player);
        };

        $dealDeck = $session->get("dealDeck") ?? new Deck();
        $counter = 0;
        while ($counter < $cards) {
            foreach ($playerArray as $playerSingle) {
                if (count($dealDeck->getDeck()) > 0) {
                    $playerSingle->addToHand($dealDeck->draw()[0]);
                };
            };
            $counter++;
        };
        $data = [
            'players' => $playerArray,
            'left' => count($dealDeck->getDeck()),
        ];

        $session->set("dealDeck", $dealDeck);

        return $this->render('card/deal.html.twig', $data);
    }
}
