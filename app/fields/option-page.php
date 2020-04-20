<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option_page');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-szablonu');

$option_page
    ->addTab('Menu', ['placement' => 'left'])
        ->addRepeater('menu')
        ->addGroup('content', ['label'=> 'Menu'])
            ->addAccordion('Ustawienia')
            ->addImage('bg', ['label' => 'Tło'])
            ->addText('title', ['label' => 'Tytuł'])
            ->addSelect('menu-type', ['label'=>'Typ potrawy'])
                ->addChoices('pizza', 'inne')
            ->addText('type1', ['label' => 'Typ 1', 'wrapper' => ['width' => '50%']])
                ->conditional('menu-type', '==', 'pizza')
            ->addText('type1size', ['label' => 'Typ 1 rozmiar', 'wrapper' => ['width' => '50%']])
                ->conditional('menu-type', '==', 'pizza')
            ->addText('type2', ['label' => 'Typ 2', 'wrapper' => ['width' => '50%']])
                ->conditional('menu-type', '==', 'pizza')
            ->addText('type2size', ['label' => 'Typ 2 rozmiar', 'wrapper' => ['width' => '50%']])
                ->conditional('menu-type', '==', 'pizza')
            ->addRepeater('list', ['label' => 'lista potraw'])
                ->addText('name', ['label' => 'Nazwa', 'default_value' => 'Pospolita'])
                ->addTextarea('desc', ['rows' => 2, 'label' => 'Opis', 'default_value' => 'pieczarki, kiełbasa, czerwona fasola, cebula'])
                ->addText('price', ['label' => 'Cena', 'default_value' => '20'])
                ->addText('price2', ['label' => 'Cena 2', 'default_value' => '27'])
            ->endRepeater()
        ->endGroup()
        ->endRepeater()
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addText('name', ['label' => 'Nazwa firmy'])
        ->addTextarea('address', ['label' => 'Adres firmy', 'rows' => '2', 'new_lines' => 'br'])
        ->addText('phone', ['label' => 'Telefon firmowy'])
        ->addText('phone2', ['label' => 'Telefon firmowy 2'])
        ->addText('email', ['label' => 'Email firmowy'])
        ->addText('email2', ['label' => 'Email firmowy 2'])
    ->addTab('Header', ['placement' => 'left'])
        ->addImage('logo')
    ->addTab('Stopka', ['placement' => 'left'])
        ->addText('copyright')
        ->addImage('iqlogo', ['label' => 'Wykonanie']);

return $option_page;