<?php


namespace Application\Model\Dao;


interface IGameConfigurationDao
{
    public function fetch();
    public function saveData(GameConfiguration $gameConfiguration);
}