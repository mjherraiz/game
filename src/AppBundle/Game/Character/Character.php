<?php

namespace AppBundle\Game\Character;


class Character
{
    protected $bullets;
    protected $name;
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
     * @return mixed
     */
    public function getBullets()
    {
        return $this->bullets;
    }

    /**
     * @param mixed $bullets
     */
    public function setBullets($bullets)
    {
        $this->bullets = $bullets;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }


}