<?php

namespace AppBundle\Document;


use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDb\Document

 */
class Role 
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
    protected $goal;

    /**
     * Role constructor.
     * @param $name
     * @param $goal
     */
    public function __construct($name, $goal)
    {
        $this->name = $name;
        $this->goal = $goal;
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
     * Set goal
     *
     * @param string $goal
     * @return $this
     */
    public function setGoal($goal)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * Get goal
     *
     * @return string $goal
     */
    public function getGoal()
    {
        return $this->goal;
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
