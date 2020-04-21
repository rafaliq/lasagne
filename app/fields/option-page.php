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
                ->addAccordion('Ustawienia menu')
                ->addImage('bg', ['label' => 'Tło'])
                ->addText('title', ['label' => 'Tytuł'])
                ->addSelect('menu-type', ['label'=>'Typ menu'])
                    ->addChoices('pizza', 'inne')
                ->addSelect('columns', ['label'=>'Kolumny'])
                    ->addChoices('1', '2')
                ->addTextarea('size1', ['rows' => 2, 'label' => 'Rozmiar 1', 'wrapper' => ['width' => '50%']])
                    ->conditional('menu-type', '==', 'pizza')
                ->addTextarea('size2', ['rows' => 2, 'label' => 'Rozmiar 2', 'wrapper' => ['width' => '50%']])
                    ->conditional('menu-type', '==', 'pizza')
                ->addRepeater('list', ['label' => 'lista potraw'])
                    ->addText('name', ['label' => 'Nazwa'])
                    ->addTextarea('desc', ['rows' => 2, 'label' => 'Opis'])
                    ->addText('price', ['label' => 'Cena'])
                    ->addText('price2', ['label' => 'Cena 2'])
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