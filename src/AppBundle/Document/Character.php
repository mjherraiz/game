<?php

namespace AppBundle\Document;


use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDb\Document

 */
class Character 
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $bullets;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $bio;

    /**
     * Character constructor.
     * @param $bullets
     * @param $name
     * @param $bio
     */
    public function __construct($bullets, $name, $bio)
    {
        $this->bullets = $bullets;
        $this->name = $name;
        $this->bio = $bio;
    }


    /**
     * Set bullets
     *
     * @param int $bullets
     * @return $this
     */
    public function setBullets($bullets)
    {
        $this->bullets = $bullets;
        return $this;
    }

    /**
     * Get bullets
     *
     * @return int $bullets
     */
    public function getBullets()
    {
        return $this->bullets;
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
     * Set bio
     *
     * @param string $bio
     * @return $this
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
        return $this;
    }

    /**
     * Get bio
     *
     * @return string $bio
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}
