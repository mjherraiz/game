<?php
namespace AppBundle\Game\Card;
class CardCollection
{
    private $items = array();

    public function init()
    {
        $this->addItem(new Weapon('Schofield', 'J', 'clubs', 2));
        $this->addItem(new Weapon('Schofield', 'Q', 'clubs', 2));
        $this->addItem(new Weapon('Winchester', '8', 'spades', 5));
        $this->addItem(new Weapon('Carabine', 'A', 'clubs', 4));
        $this->addItem(new Weapon('Volcanic', '10', 'spades', 1));
        $this->addItem(new Weapon('Volcanic', '10', 'clubs', 1));
        $this->addItem(new Weapon('Schofield', 'K', 'spades', 2));
        $this->addItem(new Weapon('Remington', 'K', 'clubs', 3));

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
        $this->addItem(new Effect('Bang', '2', 'clubs', $effects));
        $this->addItem(new Effect('Bang', '3', 'clubs', $effects));
        $this->addItem(new Effect('Bang', '4', 'clubs', $effects));
        $this->addItem(new Effect('Bang', '5', 'clubs', $effects));
        $this->addItem(new Effect('Bang', '6', 'clubs', $effects));
        $this->addItem(new Effect('Bang', '7', 'clubs', $effects));
        $this->addItem(new Effect('Bang', '8', 'clubs', $effects));
        $this->addItem(new Effect('Bang', '9', 'clubs', $effects));

        $this->addItem(new Effect('Bang', '2', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', '3', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', '4', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', '5', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', '6', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', '7', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', '8', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', '9', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', '10', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', 'J', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', 'Q', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', 'K', 'diamonds', $effects));
        $this->addItem(new Effect('Bang', 'A', 'diamonds', $effects));

        $this->addItem(new Effect('Bang', 'Q', 'herats', $effects));
        $this->addItem(new Effect('Bang', 'K', 'hearts', $effects));
        $this->addItem(new Effect('Bang', 'A', 'hearts', $effects));
        $this->addItem(new Effect('Bang', 'A', 'spades', $effects));


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
        $this->addItem(new Effect('Missed', '10', 'clubs', $effects));
        $this->addItem(new Effect('Missed', 'J', 'clubs', $effects));
        $this->addItem(new Effect('Missed', 'Q', 'clubs', $effects));
        $this->addItem(new Effect('Missed', 'K', 'clubs', $effects));
        $this->addItem(new Effect('Missed', 'A', 'clubs', $effects));

        $this->addItem(new Effect('Missed', '2', 'spades', $effects));
        $this->addItem(new Effect('Missed', '3', 'spades', $effects));
        $this->addItem(new Effect('Missed', '4', 'spades', $effects));
        $this->addItem(new Effect('Missed', '5', 'spades', $effects));
        $this->addItem(new Effect('Missed', '6', 'spades', $effects));
        $this->addItem(new Effect('Missed', '7', 'spades', $effects));
        $this->addItem(new Effect('Missed', '8', 'spades', $effects));


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

        $this->addItem(new Effect('Beer', '6', 'hearts', $effects));
        $this->addItem(new Effect('Beer', '7', 'hearts', $effects));
        $this->addItem(new Effect('Beer', '8', 'hearts', $effects));
        $this->addItem(new Effect('Beer', '9', 'hearts', $effects));
        $this->addItem(new Effect('Beer', '10', 'hearts', $effects));
        $this->addItem(new Effect('Beer', 'J', 'hearts', $effects));


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

        $this->addItem(new Effect('Panico', 'J', 'hearts', $effects));
        $this->addItem(new Effect('Panico', 'Q', 'hearts', $effects));
        $this->addItem(new Effect('Panico', 'A', 'hearts', $effects));
        $this->addItem(new Effect('Panico', '8', 'diamonds', $effects));


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

        $this->addItem(new Effect('Cat Balou', '9', 'diamonds', $effects));
        $this->addItem(new Effect('Cat Balou', '10', 'diamonds', $effects));
        $this->addItem(new Effect('Cat Balou', 'J', 'diamonds', $effects));
        $this->addItem(new Effect('Cat Balou', 'K', 'hearts', $effects));

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

        $this->addItem(new Effect('Stagecoach', '9', 'spades', $effects));
        $this->addItem(new Effect('Stagecoach', '9', 'spades', $effects));

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
        $this->addItem(new Effect('Wells Fargo', '3', 'hearts', $effects));

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
        $this->addItem(new Effect('Gatling', '10', 'hearts', $effects));

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
        $this->addItem(new Effect('Saloon', '5', 'hearts', $effects));
    }

    public function addItem(Card $card, $key = null)
    {
        if ($key == null) {
            $this->items[] = $card;
        } else {
            if (isset($this->items[$key])) {
                throw new \LogicException("Key $key already in use.");
            } else {
                $this->items[$key] = $card;
            }
        }
    }

    public function deleteItem($key)
    {
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
        } else {
            throw new \LogicException("Invalid key $key.");
        }
    }

    public function getItem($key)
    {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        } else {
            throw new \LogicException("Invalid key $key.");
        }
    }

    public function keys()
    {
        return array_keys($this->items);
    }


    public function length()
    {
        return count($this->items);
    }

    public function keyExists($key)
    {
        return isset($this->items[$key]);
    }
}