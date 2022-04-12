<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

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
        $deck = new \App\Card\Deck();
        $data = [
            'title' => 'Deck',
            'deck' => $deck->getDeck(),
        ];
        return $this->render('card/deck.html.twig', $data);
    }

        /**
     * @Route("/card/deck/shuffle", name="shuffleDeck")
     */
    public function shuffleDeck(
        SessionInterface $session
    ): Response
    {
        $session->remove("drawDeck");
        $deck = new \App\Card\Deck();

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
        SessionInterface $session): Response
    {
        $drawDeck = $session->get("drawDeck") ?? new \App\Card\Deck();

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
    public function drawCardNumber(int $numberCards,
        SessionInterface $session): Response
    {
        $drawDeck = $session->get("drawDeck") ?? new \App\Card\Deck();

        if (count($drawDeck->getDeck()) >= $numberCards) {
            $cardDrawed = $drawDeck->draw($numberCards); 
        } else {
            $cardDrawed = NULL;
        }

        $data = [
            'cards' => $cardDrawed,
            'left' => count($drawDeck->getDeck()),
        ];
        $session->set("drawDeck", $drawDeck);

        return $this->render('card/draw.html.twig', $data);
    }

}