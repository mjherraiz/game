<?php

namespace AppBundle\Controller;

use AppBundle\Game\Character\Character;
use AppBundle\Game\Events\GameEvent;
use AppBundle\Game\Game;
use AppBundle\Game\GameEvents;
use AppBundle\Game\Player;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/game", name="game")
     */
    public function gameAction(Request $request)
    {
        $game = new Game();
        $game->init();
        $characters = [new Character(5, 'Casssidy', '')
            , new Character(4, 'Toro Sentado', '')
            , new Character(5, 'Amanda', '')
            , new Character(3, 'Steve', '')
            , new Character(4, 'Billy', '')];
        shuffle($characters);
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $game->join(new Player($user),array_shift($characters));
        // Dispatch Event
        $gameEvent = new GameEvent($game);
        $gameEvent = $this->container->get('event_dispatcher')->dispatch(GameEvents::READY, $gameEvent);

        if ($gameEvent->isPropagationStopped()) {
            var_dump('game_error', 'No se ha podido iniciar el juego');
        } else {
            var_dump('game_success', 'Se ha creado un juego');
        }

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }

}
