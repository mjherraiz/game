<?php

namespace AppBundle\Controller;

use AppBundle\Game\Character\Character;
use AppBundle\Game\Game;
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
        $game=new Game();
        $game->join(new Player(),new Character(5, 'Casssidy', ''));
        $game->join(new Player(),new Character(4, 'Toro Sentado', ''));
        $game->join(new Player(),new Character(5, 'Amanda', ''));
        $game->join(new Player(),new Character(3, 'Steve', ''));
        $game->join(new Player(),new Character(4, 'Billy', ''));
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

}
