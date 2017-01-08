<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Document\Game;
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
     * @Route("/game/create", name="create")
     */
    public function createAction(Request $request)
    {
        $game = new Game();
        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($game);
        $dm->flush();
        return new Response('Created game id ' . $game->getId());

    }

    /**
     * @Route("/game/show/{id}", name="show")
     */
    public function showAction($id)
    {
        $game = $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Game')
            ->find($id);
        return new Response('Game id ' . $game->getId());

        if (!$game) {
            throw $this->createNotFoundException('No game found for id ' . $id);
        }

        // do something, like pass the $game object into a template
    }

    public function listAction()
    {
        $this->get('doctrine_mongodb')
            ->getRepository('AppBundle:Game')
            ->findAll();
    }
//    /**
//     * @Route("/game", name="game")
//     */
//    public function gameAction(Request $request)
//    {
//        $game = new Game();
//        $game->init();
//        $characters = [new Character(5, 'Casssidy', '')
//            , new Character(4, 'Toro Sentado', '')
//            , new Character(5, 'Amanda', '')
//            , new Character(3, 'Steve', '')
//            , new Character(4, 'Billy', '')];
//        shuffle($characters);
//        $user = $this->get('security.token_storage')->getToken()->getUser();
//        $game->join(new Player($user),array_shift($characters));
//        // Dispatch Event
//        $gameEvent = new GameEvent($game);
//        $gameEvent = $this->container->get('event_dispatcher')->dispatch(GameEvents::READY, $gameEvent);
//
//        if ($gameEvent->isPropagationStopped()) {
//            var_dump('game_error', 'No se ha podido iniciar el juego');
//        } else {
//            var_dump('game_success', 'Se ha creado un juego');
//        }
//
//        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
//        ]);
//    }

}
