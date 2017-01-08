<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDb\Document
 * @MongoDb\InheritanceType("SINGLE_COLLECTION")
 * @MongoDb\DiscriminatorField("type")
 * @MongoDb\DiscriminatorMap({"effect"="Effect", "weapon"="Weapon"})
 */
class Card
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $number;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $suit;
    

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Get number
     *
     * @return string $number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set suit
     *
     * @param string $suit
     * @return $this
     */
    public function setSuit($suit)
    {
        $this->suit = $suit;
        return $this;
    }

    /**
     * Get suit
     *
     * @return string $suit
     */
    public function getSuit()
    {
        return $this->suit;
    }
}
