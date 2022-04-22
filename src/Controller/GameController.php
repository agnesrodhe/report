<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Card\Game;
use App\Card\Player;
use App\Card\Deck;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="game")
     */
    public function game(): Response
    {
        return $this->render('game/game-intro.html.twig');
    }

    /**
     * @Route("/game/doc", name="game-doc")
     */
    public function gameDoc(): Response
    {
        return $this->render('game/game-doc.html.twig');
    }

    /**
     * @Route("/game/start", name="game-start")
     */
    public function gameStart(SessionInterface $session): Response
    {
        $session->remove("game");
        $game = new Game();

        $session->set("game", $game);

        return $this->render('game/game-start.html.twig');
    }

    /**
     * @Route("/game/draw", name="game-draw")
     */
    public function gameDraw(SessionInterface $session): Response
    {
        $game = $session->get("game");
        $game->drawCard();
        $cardHand = $game->getHand();
        $sum = $game->getSum();
        $data = [
            'sum' => $sum[0],
            'cardHand' => $cardHand
        ];

        $session->set("game", $game);
        return $this->render('game/game-draw.html.twig', $data);
    }
};