<?php


namespace Application\Form;


use Zend\Form\Element;
use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $email = new Element\Email('email');
        $email->setLabel('Email')->setLabelAttributes(['class' => 'control-form']);
        $email->setAttributes(['class' => 'form-control', 'placeholder' => 'Introduce you email. Ex.: example@gmail.com']);
        $this->add($email);

        $password = new Element\Password('password');
        $password->setLabel('Password')->setAttributes(['class' => 'control-form']);
        $password->setAttributes(['class' => 'form-control', 'placeholder' => 'Introduce a password.']);
        $this->add($password);

        $button = new Element\Button('enter');
        $button->setAttributes(['class' => "btn btn-primary btn-lg", 'style' => 'width: 100%','value' => 'Login', 'type' => 'submit']);
        $this->add($button);
    }


}