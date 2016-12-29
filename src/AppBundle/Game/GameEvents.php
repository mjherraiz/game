<?php
/**
 * Created by PhpStorm.
 * User: newton
 * Date: 29/12/16
 * Time: 23:48
 */

namespace AppBundle\Game;


final class GameEvents
{
    /**
     * This event occurs when a game is ready to play
     *
     * The event listener receives an
     * AppBundle\Game\Event\GameEvent instance.
     *
     * @var string
     */
    const READY = 'game.ready';
}