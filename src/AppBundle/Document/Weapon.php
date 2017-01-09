<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class Weapon extends Card
{
    const TYPE = 'weapon';
    /**
     * @MongoDB\Field(type="int")
     */
    protected $reachableDistance;

    /**
     * Weapon constructor.
     * @param $name
     * @param $number
     * @param $suit
     * @param $rachableDistance
     */

    public function __construct($name,$number,$suit,$reachableDistance)
    {
        $this->setName($name);
        $this->setNumber($number);
        $this->setSuit($suit);
       $this->setReachableDistance($reachableDistance);
    }

    /**
     * Set reachableDistance
     *
     * @param int $reachableDistance
     * @return $this
     */
    public function setReachableDistance($reachableDistance)
    {
        $this->reachableDistance = $reachableDistance;
        return $this;
    }

    /**
     * Get reachableDistance
     *
     * @return int $reachableDistance
     */
    public function getReachableDistance()
    {
        return $this->reachableDistance;
    }


}
