<?php


namespace Application\Form;


use Zend\Form\Form;
use Zend\Form\Element;

class GameConfigurationForm extends Form
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $id = new Element\Hidden('id');
        $this->add($id);

        $game_type_label = new Element\Text('game_type_label');
        $game_type_label->setAttributes([
            'value' => 'Choose the type of bingo you want to play',
            'type' => 'label',
            'class' => 'form-control',
            'for' => 'game'
        ]);
        $this->add($game_type_label);

        $game_type = new Element\Select('game_type');
        $game_type->setAttributes([
            'class' =>'form-control',
            'id' => 'game'
        ]);
        $this->add($game_type);

        $quantity_cards = new Element\Text('quantity_cards');
        $quantity_cards->setLabel('How many cards do you want for play?')
            ->setLabelAttributes(['class' => 'control-form']);
        $quantity_cards->setAttributes([
            'class' => 'form-control',
            'placeholder' => 'Introduce the quantity of cards do you want for play. Ex: 5'
        ]);
        $this->add($quantity_cards);

        $way_to_play_label = new Element\text('way_to_play_label');
        $way_to_play_label->setAttributes(['class' => 'control-form', 'for' => 'way_to_play']);
        $this->add($way_to_play_label);

        $way_to_play = new Element\Select('way_to_play');
        $way_to_play->setEmptyOption('--- Choose an option to play ---');
        $way_to_play->setAttributes(['class' => 'form-control', 'id' => 'way_to_play']);
        $this->add($way_to_play);

        $button = new Element\Button('create');
        $button->setAttributes([
            'value' => 'Start to Pley',
            'class' => 'btn btn-primary',
            'type' => 'submit']);
        $this->add($button);
    }

}