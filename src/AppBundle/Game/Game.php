<?php
namespace AppBundle\Game;

use AppBundle\Game\Card\CardCollection;

class Game
{
    protected $nplayers;
    public $deck;
    public $discarted;
    protected $players;
    public function init($nplayers)
    {
        $this->deck = new CardCollection();
        $this->deck->init();
        $this->discarted = new CardCollection();
        switch ($nplayers) {
            case 5:
                $this->players[] = new Player(new Character(5, 'Billy', ''), new Role('sheriff'));
                $this->players[] = new Player(new Character(3, 'Amanda', ''), new Role('rengade'));
                $this->players[] = new Player(new Character(4, 'Casssidy', ''), new Role('outlaw'));
                $this->players[] = new Player(new Character(4, 'Toro Sentado', ''), new Role('outlaw'));
                $this->players[] = new Player(new Character(3, 'Steve', ''), new Role('deputy'));
                break;
            default:
                break;
        }

    }

}

