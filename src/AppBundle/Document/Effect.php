<?php

namespace AppBundle\Document;


use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDb\Document

 */
class Effect extends Card
{


    /**
     * @MongoDB\Field(type="int")
     */
    protected $bang;

    /**
     * @MongoDB\Field(type="bool")
     */
    protected $missed;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $regain;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $draw;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $discard;

    /**
     * @MongoDB\Field(type="bool")
     */
    protected $anyChosenPlayer;

    /**
     * @MongoDB\Field(type="bool")
     */
    protected $otherPlayer;

    /**
     * @MongoDB\Field(type="bool")
     */
    protected $reachablePlayer;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $rechableDistance;

    /**
     * Effect constructor.
     * @param $name
     * @param $number
     * @param $suit
     * @param $effects
     */
    public function __construct($name,$number,$suit,$effects)
    {
        $this->setName($name);
        $this->setNumber($number);
        $this->setSuit($suit);
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


    /**
     * Set bang
     *
     * @param int $bang
     * @return $this
     */
    public function setBang($bang)
    {
        $this->bang = $bang;
        return $this;
    }

    /**
     * Get bang
     *
     * @return int $bang
     */
    public function getBang()
    {
        return $this->bang;
    }

    /**
     * Set missed
     *
     * @param bool $missed
     * @return $this
     */
    public function setMissed($missed)
    {
        $this->missed = $missed;
        return $this;
    }

    /**
     * Get missed
     *
     * @return bool $missed
     */
    public function getMissed()
    {
        return $this->missed;
    }

    /**
     * Set regain
     *
     * @param int $regain
     * @return $this
     */
    public function setRegain($regain)
    {
        $this->regain = $regain;
        return $this;
    }

    /**
     * Get regain
     *
     * @return int $regain
     */
    public function getRegain()
    {
        return $this->regain;
    }

    /**
     * Set draw
     *
     * @param int $draw
     * @return $this
     */
    public function setDraw($draw)
    {
        $this->draw = $draw;
        return $this;
    }

    /**
     * Get draw
     *
     * @return int $draw
     */
    public function getDraw()
    {
        return $this->draw;
    }

    /**
     * Set discard
     *
     * @param int $discard
     * @return $this
     */
    public function setDiscard($discard)
    {
        $this->discard = $discard;
        return $this;
    }

    /**
     * Get discard
     *
     * @return int $discard
     */
    public function getDiscard()
    {
        return $this->discard;
    }

    /**
     * Set anyChosenPlayer
     *
     * @param bool $anyChosenPlayer
     * @return $this
     */
    public function setAnyChosenPlayer($anyChosenPlayer)
    {
        $this->anyChosenPlayer = $anyChosenPlayer;
        return $this;
    }

    /**
     * Get anyChosenPlayer
     *
     * @return bool $anyChosenPlayer
     */
    public function getAnyChosenPlayer()
    {
        return $this->anyChosenPlayer;
    }

    /**
     * Set otherPlayer
     *
     * @param bool $otherPlayer
     * @return $this
     */
    public function setOtherPlayer($otherPlayer)
    {
        $this->otherPlayer = $otherPlayer;
        return $this;
    }

    /**
     * Get otherPlayer
     *
     * @return bool $otherPlayer
     */
    public function getOtherPlayer()
    {
        return $this->otherPlayer;
    }

    /**
     * Set reachablePlayer
     *
     * @param bool $reachablePlayer
     * @return $this
     */
    public function setReachablePlayer($reachablePlayer)
    {
        $this->reachablePlayer = $reachablePlayer;
        return $this;
    }

    /**
     * Get reachablePlayer
     *
     * @return bool $reachablePlayer
     */
    public function getReachablePlayer()
    {
        return $this->reachablePlayer;
    }

    /**
     * Set rechableDistance
     *
     * @param int $rechableDistance
     * @return $this
     */
    public function setRechableDistance($rechableDistance)
    {
        $this->rechableDistance = $rechableDistance;
        return $this;
    }

    /**
     * Get rechableDistance
     *
     * @return int $rechableDistance
     */
    public function getRechableDistance()
    {
        return $this->rechableDistance;
    }
}
