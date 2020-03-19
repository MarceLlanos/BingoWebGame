<?php


namespace Application\Form;


use Zend\Form\Element;
use Zend\Form\Form;

class LoginForm extends Form
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $name = new Element\Text('name');
        $name->setLabel('User name')->setLabelAttributes(['class' => 'control-form']);
        $name->setAttributes(['class' => 'form-control', 'placeholder' => 'Introduce your name. Ex.: John Doe']);
        $this->add($name);

        $email = new Element\Email('email');
        $email->setLabel('Email')->setLabelAttributes(['class' => 'control-form']);
        $email->setAttributes(['class' => 'form-control', 'placeholder' => 'Introduce you email. Ex.: example@gmail.com']);
        $this->add($email);

        $password = new Element\Password('password');
        $password->setLabel('Password')->setAttributes(['class' => 'control-form']);
        $password->setAttributes(['class' => 'form-control', 'placeholder' => 'Introduce a password.']);
        $this->add($password);

        $button = new Element\Button('send');
        $button->setAttributes(['class' => "btn bnt-primary", 'value' => 'Login', 'type' => 'submit']);
        $this->add($button);
    }

}