<?php
namespace AppBundle\Game;

class Player
{
    protected $role;

    protected $character;

    protected $weapon;

    protected $bullets;

    protected $cards;

    public function init(Character $character, Role $role, $weapon = null, $cards = null)
    {
        $this->character = $character;
        $this->role = $role;
        $this->weapon = $weapon;
        $this->cards = $cards;
        $this->bullets = $character->getBullets();
        if ($role->getName() == 'sheriff') {
            $this->bullets++;
        }
    }

}