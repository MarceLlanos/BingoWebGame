<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Form\LoginForm;
use Application\Form\RegisterForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function loginAction()
    {
        $login_form = new LoginForm('login');

        return new ViewModel(['title' => 'Login User', 'login_form' => $login_form ]);
    }

    public function  registerAction()
    {
        $register_form = new RegisterForm('register');

        return new ViewModel(['title' => 'User Register', 'register_form' => $register_form ]);
    }
}
