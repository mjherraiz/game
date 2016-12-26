<?php

namespace AppBundle\Game\Card;


class Effect extends Card
{



    protected $bang;

    protected $missed;

    protected $regain;

    protected $draw;

    protected $discard;

    protected $anyChosenPlayer;

    protected $otherPlayer;

    protected $reachablePlayer;

    protected $rechableDistance;

    /**
     * Effect constructor.
     * @param $bang
     * @param $missed
     * @param $regain
     * @param $draw
     * @param $discard
     * @param $anyChosenPlayer
     * @param $otherPlayer
     * @param $reachablePlayer
     * @param $rechableDistance
     */
    public function __construct($name
        ,$number, $suit,$effects)
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

    public function play(){}
}