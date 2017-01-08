<?php

namespace AppBundle\Game\Card;


/**
 * Class Effect
 * @package AppBundle\Game\Card
 */
class Effect extends Card
{
    /**
     * @var
     */
    protected $bang;

    /**
     * @var
     */
    protected $missed;

    /**
     * @var
     */
    protected $regain;

    /**
     * @var
     */
    protected $draw;

    /**
     * @var
     */
    protected $discard;

    /**
     * @var
     */
    protected $anyChosenPlayer;

    /**
     * @var
     */
    protected $otherPlayer;

    /**
     * @var
     */
    protected $reachablePlayer;

    /**
     * @var
     */
    protected $rechableDistance;

    /**
     * Effect constructor.
     * @param $name
     * @param $number
     * @param $suit
     * @param $effects
     */

    public function __construct($name
        , $number, $suit, $effects)
    {
        $this->bang = $effects['bang'];
        $this->missed = $effects['missed'];
        $this->regain = $effects['regain'];
        $this->draw = $effects['draw'];
        $this->discard = $effects['discard'];
        $this->anyChosenPlayer = $effects['anyChosenPlayer'];
        $this->otherPlayer = $effects['otherPlayer'];
        $this->reachablePlayer = $effects['reachablePlayer'];
        $this->rechableDistance = $effects['rechableDistance'];
    }



}