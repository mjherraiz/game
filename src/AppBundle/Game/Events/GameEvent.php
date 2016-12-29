<?php
namespace AppBundle\Game\Events;
use AppBundle\Game\Game;
use Symfony\Component\EventDispatcher\Event;


class GameEvent extends Event
{
    private $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function getGame()
    {
        return $this->game;
    }
}