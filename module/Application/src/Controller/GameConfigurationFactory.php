<?php
namespace Application\Controller;


use Application\Form\GameConfigurationForm;
use Application\Model\Dao\IGameConfigurationDao;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class GameConfigurationFactory implements FactoryInterface
{
    /**
     * @inheritDoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $controller = null;

        switch ($requestedName)
        {
            case GameConfigurationController::class :
                $gameDao = $container->get(IGameConfigurationDao::class);
                $controller = new GameConfigurationForm($gameDao);
                break;
        }

        return $controller;
    }
}