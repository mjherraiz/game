<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Game
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $nplayers;

    /** @MongoDB\ReferenceMany(targetDocument="Card", cascade="all") */
    public $deck;
    /**
     * @var
     */
    public $discarted;
    /**
     * @MongoDB\Field(type="collection")
     */
    protected $players;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $roles;


    public function __construct()
    {
        $this->addDeck(new Weapon('Schofield', 'J', 'clubs', 2));
        $this->addDeck(new Weapon('Schofield', 'Q', 'clubs', 2));
        $this->addDeck(new Weapon('Winchester', '8', 'spades', 5));
        $this->addDeck(new Weapon('Carabine', 'A', 'clubs', 4));
        $this->addDeck(new Weapon('Volcanic', '10', 'spades', 1));
        $this->addDeck(new Weapon('Volcanic', '10', 'clubs', 1));
        $this->addDeck(new Weapon('Schofield', 'K', 'spades', 2));
        $this->addDeck(new Weapon('Remington', 'K', 'clubs', 3));

        $effects = ['bang' => 1,
            'missed' => null,
            'regain' => null,
            'draw' => null,
            'discard' => null,
            'anyChosenPlayer' => null,
            'otherPlayer' => null,
            'reachablePlayer' => true,
            'rechableDistance' => null
        ];
        $this->addDeck(new Effect('Bang', '2', 'clubs', $effects));
        $this->addDeck(new Effect('Bang', '3', 'clubs', $effects));
        $this->addDeck(new Effect('Bang', '4', 'clubs', $effects));
        $this->addDeck(new Effect('Bang', '5', 'clubs', $effects));
        $this->addDeck(new Effect('Bang', '6', 'clubs', $effects));
        $this->addDeck(new Effect('Bang', '7', 'clubs', $effects));
        $this->addDeck(new Effect('Bang', '8', 'clubs', $effects));
        $this->addDeck(new Effect('Bang', '9', 'clubs', $effects));

        $this->addDeck(new Effect('Bang', '2', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', '3', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', '4', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', '5', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', '6', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', '7', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', '8', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', '9', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', '10', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', 'J', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', 'Q', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', 'K', 'diamonds', $effects));
        $this->addDeck(new Effect('Bang', 'A', 'diamonds', $effects));

        $this->addDeck(new Effect('Bang', 'Q', 'herats', $effects));
        $this->addDeck(new Effect('Bang', 'K', 'hearts', $effects));
        $this->addDeck(new Effect('Bang', 'A', 'hearts', $effects));
        $this->addDeck(new Effect('Bang', 'A', 'spades', $effects));


        $effects = ['bang' => null,
            'missed' => true,
            'regain' => null,
            'draw' => null,
            'discard' => null,
            'anyChosenPlayer' => null,
            'otherPlayer' => null,
            'reachablePlayer' => null,
            'rechableDistance' => null
        ];
        $this->addDeck(new Effect('Missed', '10', 'clubs', $effects));
        $this->addDeck(new Effect('Missed', 'J', 'clubs', $effects));
        $this->addDeck(new Effect('Missed', 'Q', 'clubs', $effects));
        $this->addDeck(new Effect('Missed', 'K', 'clubs', $effects));
        $this->addDeck(new Effect('Missed', 'A', 'clubs', $effects));

        $this->addDeck(new Effect('Missed', '2', 'spades', $effects));
        $this->addDeck(new Effect('Missed', '3', 'spades', $effects));
        $this->addDeck(new Effect('Missed', '4', 'spades', $effects));
        $this->addDeck(new Effect('Missed', '5', 'spades', $effects));
        $this->addDeck(new Effect('Missed', '6', 'spades', $effects));
        $this->addDeck(new Effect('Missed', '7', 'spades', $effects));
        $this->addDeck(new Effect('Missed', '8', 'spades', $effects));


        $effects = ['bang' => null,
            'missed' => null,
            'regain' => 1,
            'draw' => null,
            'discard' => null,
            'anyChosenPlayer' => null,
            'otherPlayer' => null,
            'reachablePlayer' => null,
            'rechableDistance' => null
        ];

        $this->addDeck(new Effect('Beer', '6', 'hearts', $effects));
        $this->addDeck(new Effect('Beer', '7', 'hearts', $effects));
        $this->addDeck(new Effect('Beer', '8', 'hearts', $effects));
        $this->addDeck(new Effect('Beer', '9', 'hearts', $effects));
        $this->addDeck(new Effect('Beer', '10', 'hearts', $effects));
        $this->addDeck(new Effect('Beer', 'J', 'hearts', $effects));


        $effects = ['bang' => null,
            'missed' => null,
            'regain' => false,
            'draw' => 1,
            'discard' => null,
            'anyChosenPlayer' => null,
            'otherPlayer' => null,
            'reachablePlayer' => null,
            'rechableDistance' => 1
        ];

        $this->addDeck(new Effect('Panico', 'J', 'hearts', $effects));
        $this->addDeck(new Effect('Panico', 'Q', 'hearts', $effects));
        $this->addDeck(new Effect('Panico', 'A', 'hearts', $effects));
        $this->addDeck(new Effect('Panico', '8', 'diamonds', $effects));


        $effects = ['bang' => null,
            'missed' => null,
            'regain' => false,
            'draw' => null,
            'discard' => 1,
            'anyChosenPlayer' => true,
            'otherPlayer' => null,
            'reachablePlayer' => null,
            'rechableDistance' => null
        ];

        $this->addDeck(new Effect('Cat Balou', '9', 'diamonds', $effects));
        $this->addDeck(new Effect('Cat Balou', '10', 'diamonds', $effects));
        $this->addDeck(new Effect('Cat Balou', 'J', 'diamonds', $effects));
        $this->addDeck(new Effect('Cat Balou', 'K', 'hearts', $effects));

        $effects = ['bang' => null,
            'missed' => null,
            'regain' => false,
            'draw' => 2,
            'discard' => null,
            'anyChosenPlayer' => null,
            'otherPlayer' => null,
            'reachablePlayer' => null,
            'rechableDistance' => null
        ];

        $this->addDeck(new Effect('Stagecoach', '9', 'spades', $effects));
        $this->addDeck(new Effect('Stagecoach', '9', 'spades', $effects));

        $effects = ['bang' => null,
            'missed' => null,
            'regain' => false,
            'draw' => 3,
            'discard' => null,
            'anyChosenPlayer' => null,
            'otherPlayer' => null,
            'reachablePlayer' => null,
            'rechableDistance' => null
        ];
        $this->addDeck(new Effect('Wells Fargo', '3', 'hearts', $effects));

        $effects = ['bang' => true,
            'missed' => null,
            'regain' => null,
            'draw' => null,
            'discard' => null,
            'anyChosenPlayer' => true,
            'otherPlayer' => null,
            'reachablePlayer' => null,
            'rechableDistance' => null
        ];
        $this->addDeck(new Effect('Gatling', '10', 'hearts', $effects));

        $effects = ['bang' => null,
            'missed' => null,
            'regain' => 2,
            'draw' => null,
            'discard' => null,
            'anyChosenPlayer' => true,
            'otherPlayer' => null,
            'reachablePlayer' => null,
            'rechableDistance' => null
        ];
        $this->addDeck(new Effect('Saloon', '5', 'hearts', $effects));
        shuffle($this->deck);
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

    /**
     * Set nplayers
     *
     * @param int $nplayers
     * @return $this
     */
    public function setNplayers($nplayers)
    {
        $this->nplayers = $nplayers;
        return $this;
    }

    /**
     * Get nplayers
     *
     * @return int $nplayers
     */
    public function getNplayers()
    {
        return $this->nplayers;
    }

    /**
     * Add deck
     *
     * @param AppBundle\Document\Card $deck
     */
    public function addDeck(Card $deck)
    {
        $this->deck[] = $deck;
    }

    /**
     * Remove deck
     *
     * @param AppBundle\Document\Card $deck
     */
    public function removeDeck(\AppBundle\Document\Card $deck)
    {
        $this->deck->removeElement($deck);
    }

    /**
     * Get deck
     *
     * @return \Doctrine\Common\Collections\Collection $deck
     */
    public function getDeck()
    {
        return $this->deck;
    }

    /**
     * Get deck
     *
     * @return Card $deck
     */
    public function draw()
    {
        return $this->deck;
    }

    /**
     * Set players
     *
     * @param collection $players
     * @return $this
     */
    public function setPlayers($players)
    {
        $this->players = $players;
        return $this;
    }

    /**
     * Get players
     *
     * @return collection $players
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set roles
     *
     * @param collection $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Get roles
     *
     * @return collection $roles
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
