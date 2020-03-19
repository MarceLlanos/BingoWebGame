<?php


namespace Application\Model\Entity;


class GameConfiguration
{
    protected $id;
    protected $type_game;
    protected $quantity_cards;
    protected $way_to_play;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTypeGame()
    {
        return $this->type_game;
    }

    /**
     * @param mixed $type_game
     */
    public function setTypeGame($type_game)
    {
        $this->type_game = $type_game;
    }

    /**
     * @return mixed
     */
    public function getQuantityCards()
    {
        return $this->quantity_cards;
    }

    /**
     * @param mixed $way_to_play
     */
    public function setWayToPlay($way_to_play)
    {
        $this->way_to_play = $way_to_play;
    }

    /**
     * @return mixed
     */
    public function getWayToPlay()
    {
        return $this->way_to_play;
    }

    /**
     * @param mixed $quantity_cards
     */
    public function setQuantityCards($quantity_cards)
    {
        $this->quantity_cards = $quantity_cards;
    }

    public function exchangeArray($data)
    {
        $this->id = (isset($data['id']))? $data['id'] : null;
        $this->type_game = (isset($data['type_game']))? $data['type_game'] : null;
        $this->quantity_cards = (isset($data['quantity_cards']))? $data['quantity_cards'] : null;
        $this->way_to_play = (isset($data['way_to_play']))? $data['way_to_play'] : null;
    }

    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}