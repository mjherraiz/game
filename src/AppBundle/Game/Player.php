<?php
namespace AppBundle\Game;

use AppBundle\Game\Card\Card;
use AppBundle\Game\Card\CardCollection;
use AppBundle\Game\Character\Character;
use AppBundle\Game\Role\Role;

/**
 * Class Player
 * @package AppBundle\Game
 */
class Player
{
    /**
     * @var Role
     */
    protected $role;

    /**
     * @var Character
     */
    protected $character;

    /**
     * @var Card
     */
    protected $weapon;
    /**
     * @var int
     */
    protected $bullets;
    /**
     * @var CardCollection
     */
    protected $hand;

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param Role $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return Character
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * @param Character $character
     */
    public function setCharacter($character)
    {
        $this->character = $character;
    }

    /**
     * @return Card
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param Card $weapon
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * @return int
     */
    public function getBullets()
    {
        return $this->bullets;
    }

    /**
     * @param int $bullets
     */
    public function setBullets($bullets)
    {
        $this->bullets = $bullets;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
    /**
     * @var bool
     */
    protected $active;

    /**
     * @param Character $character
     * @param Role $role
     * @param null||Card $weapon
     * @param null||CardCollection $hand
     */
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
     * @return CardCollection
     */
    public function getHand()
    {
        return $this->hand;
    }

    /**
     * @param CardCollection $hand
     */
    public function setHand($hand)
    {
        $this->hand = $hand;
    }

}