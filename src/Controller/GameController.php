<?php

namespace App\Controller;

use App\Game\Card;
use App\Game\Deck;
use App\Game\Hand;
use App\Game\Player;
use App\Game\Bank;
use App\Game\Game;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    #[Route('/game', name: 'game')]
    public function game(): Response
    {
        return $this->render('game/game.html.twig');
    }

    #[Route('/game/init', name: 'game_init_get', methods: ['GET'])]
    public function init(): Response
    {
        return $this->render('game/init.html.twig');
    }

    /* Init the game */
    #[Route('/game/init', name: 'game_init_post', methods: ['POST'])]
    public function initCallback(
        Request $request,
        SessionInterface $session
    ): Response {
        $playersName = $request->request->get('name');
        $playerNameAsString = strval($playersName);

        $game = new Game($playerNameAsString);
        $game->start();

        $session->set('game', $game);
        $session->set('player_name', $game->player->getName());
        $session->set('player_hand', $game->player->getHand());
        $session->set('player_value', $game->player->getHand()->getValue());
        $session->set('bank_hand', $game->bank->getHand());
        $session->set('bank_value', $game->bank->getHand()->getValue());
        $session->set('deck_count', $game->deck->getNumCards());

        return $this->redirectToRoute('play');
    }

    #[Route('/game/play', name: 'play', methods: ['GET'])]
    public function play(
        SessionInterface $session
    ): Response {
        $playerValue = $session->get('player_value');

        if ($playerValue == 21) {
            $this->addFlash(
                'success',
                'Grattis! Du vann!'
            );
        }

        if ($playerValue > 21) {
            $this->addFlash(
                'warning',
                'Du har spruckit!'
            );
        }

        $data = [
            'playerName' => $session->get('player_name'),
            'playerHand' => $session->get('player_hand'),
            'playerValue' => $session->get('player_value'),
            'bankHand' => $session->get('bank_hand'),
            'bankValue' => $session->get('bank_value'),
            'deckCount' => $session->get('deck_count'),
        ];

        return $this->render('game/play.html.twig', $data);
    }

    #[Route('/game/hit', name: 'hit', methods: ['POST'])]
    public function hit(
        SessionInterface $session
    ): Response {
        $choice = 'hit';

        /** @var Game $game */
        $game = $session->get('game');
        $game->play($choice);
        $session->set('game', $game);
        $session->set('deck_count', $game->deck->getNumCards());
        $session->set('player_value', $game->player->getHand()->getValue());

        return $this->redirectToRoute('play');
    }

    #[Route('/game/stand', name: 'stand', methods: ['POST'])]
    public function stand(
        SessionInterface $session
    ): Response {
        $choice = 'stand';
        /** @var Game $game */
        $game = $session->get('game');
        $game->play($choice);
        $session->set('deck_count', $game->deck->getNumCards());
        $session->set('bank_value', $game->bank->getHand()->getValue());

        $bankValue = $session->get('bank_value');
        $playerValue = $session->get('player_value');

        if ($bankValue > 21) {
            $this->addFlash(
                'success',
                'Banken har spruckit!'
            );
        } elseif ($playerValue > $bankValue) {
            $this->addFlash(
                'success',
                'Grattis! Du vann!'
            );
        } elseif ($playerValue == $bankValue && $playerValue != 0) {
            $this->addFlash(
                'warning',
                'Det är lika mellan er! Du förlorade!'
            );
        }

        return $this->redirectToRoute('play');
    }

    #[Route('/game/reset', name: 'reset', methods: ['POST'])]
    public function reset(
        SessionInterface $session
    ): Response {
        /** @var Game $game */
        $game = $session->get('game');
        $game->end();
        $session->set('deck_count', $game->deck->getNumCards());
        $session->set('player_value', $game->player->getHand()->getValue());
        $session->set('bank_value', $game->bank->getHand()->getValue());

        return $this->redirectToRoute('play');
    }
}
