<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDb\Document
 */
class Player
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $user;
    /** 
     * @MongoDB\ReferenceOne(targetDocument="Character", cascade="all")
     */
    protected $character;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Role", cascade="all")
     */
    protected $role;
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
    public function __construct()
    {
        $this->character = new \Doctrine\Common\Collections\ArrayCollection();
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
   

    /**
     * Set character
     *
     * @param AppBundle\Document\Character $character
     * @return $this
     */
    public function setCharacter(\AppBundle\Document\Character $character)
    {
        $this->character = $character;
        return $this;
    }

    /**
     * Get character
     *
     * @return AppBundle\Document\Character $character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Set role
     *
     * @param AppBundle\Document\Role $role
     * @return $this
     */
    public function setRole(\AppBundle\Document\Role $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Get role
     *
     * @return AppBundle\Document\Role $role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return string $user
     */
    public function getUser()
    {
        return $this->user;
    }
}
