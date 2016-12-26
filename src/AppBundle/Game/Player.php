<?php
namespace AppBundle\Game;

class Player
{
    protected $role;

    protected $character;

    protected $weapon;

    protected $bullets;

    protected $hand;

    public function init(Character $character, Role $role, $weapon = null, $hand = null)
    {
        $this->character = $character;
        $this->role = $role;
        $this->weapon = $weapon;
        $this->hand = $hand;
        $this->bullets = $character->getBullets();
        if ($role->getName() == 'sheriff') {
            $this->bullets++;
        }
    }

    /**
     * @return mixed
     */
    public function getHand()
    {
        return $this->hand;
    }

    /**
     * @param mixed $hand
     */
    public function setHand($hand)
    {
        $this->hand = $hand;
    }

}