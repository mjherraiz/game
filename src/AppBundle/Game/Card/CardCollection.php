<?php
namespace AppBundle\Game\Card;
/**
 * Class CardCollection
 * @package AppBundle\Game\Card
 */
class CardCollection
{
    /**
     * @var array
     */
    public $items = array();

    /**
     * @param Card $card
     */
    public function addItem(Card $card)
    {
        $this->items[] = $card;
    }

}