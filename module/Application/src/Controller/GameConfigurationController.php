<?php


namespace Application\Controller;


use Application\Form\GameConfigurationForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GameConfigurationController extends AbstractActionController
{

    public function indexAction()
    {

    }

    public function gameConfigurationAction()
    {
        $form = new GameConfigurationForm('gameConfiguration');

        return new ViewModel([ 'title' => 'Create Game', 'form' => $form ]);
    }
}