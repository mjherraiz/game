<?php
namespace AppBundle\Game\Card;


class Weapon extends Card
{
    
    protected $reachableDistance;

    /**
     * Weapon constructor.
     * @param $reachableDistance
     */
    public function __construct($name, $number, $color, $reachableDistance)
    {
        $this->reachableDistance = $reachableDistance;
    }

    /**
     * @return mixed
     */
    public function getReachableDistance()
    {
        return $this->reachableDistance;
    }

    /**
     * @param mixed $reachableDistance
     */
    public function setReachableDistance($reachableDistance)
    {
        $this->reachableDistance = $reachableDistance;
    }
    
}