<?php
namespace AppBundle\Game\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use AppBundle\Game\Events\GameEvent;
use AppBundle\Game\GameEvents;

/**
 * Class NotifyPlayerSuscriber
 * @package AppBundle\Game\EventListener
 */
class NotifyPlayerSuscriber implements EventSubscriberInterface
{
    private $player;

    public function __construct()
    {
        $this->player = '';
    }

    public static function getSubscribedEvents()
    {
        return array(
            GameEvents::READY => 'onGameReady'
        );
    }

    public function onGameReady(GameEvent $event)
    {
        $game = $event->getGame();

          $event->stopPropagation();
        return;


    }
}
