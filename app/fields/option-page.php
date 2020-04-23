<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option_page');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-szablonu');

$option_page
    ->addTab('Menu', ['placement' => 'left'])
        ->addFile('menu-pdf', ['label' => 'Menu PDF'])
        ->addRepeater('menu')
            ->addGroup('content', ['label'=> 'Menu'])
                ->addAccordion('Ustawienia menu')
                ->addImage('bg', ['label' => 'Tło'])
                ->addText('title', ['label' => 'Tytuł'])
                ->addSelect('menu-type', ['label'=>'Typ menu'])
                    ->addChoices('pizza', 'inne')
                ->addSelect('columns', ['label'=>'Kolumny'])
                    ->addChoices('1', '2')
                ->addTextarea('size1', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Rozmiar 1', 'wrapper' => ['width' => '50%']])
                    ->conditional('menu-type', '==', 'pizza')
                ->addTextarea('size2', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Rozmiar 2', 'wrapper' => ['width' => '50%']])
                    ->conditional('menu-type', '==', 'pizza')
                ->addRepeater('list', ['label' => 'lista potraw'])
                    ->addText('name', ['label' => 'Nazwa'])
                    ->addTextarea('desc', ['rows' => 2, 'label' => 'Opis'])
                    ->addText('price', ['label' => 'Cena'])
                    ->addText('price2', ['label' => 'Cena 2'])
                ->endRepeater()
                ->addRadio('twolist', ['label'=>'Dodatkowa tabelka'])
                    ->addChoices('nie', 'tak')
                ->addText('list2title', ['label' => 'Tytuł tabelki'])
                    ->conditional('twolist', '==', 'tak')
                ->addRepeater('list2', ['label' => 'lista'])
                    ->conditional('twolist', '==', 'tak')
                    ->addText('name', ['label' => 'Nazwa'])
                    ->addText('price', ['label' => 'Cena'])
                ->endRepeater()
                ->addWysiwyg('desc', ['label' => 'Tekst pod cennikiem', 'media_upload' => 0])
            ->endGroup()
        ->endRepeater()
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addText('name', ['label' => 'Nazwa firmy'])
        ->addTextarea('address', ['label' => 'Adres firmy', 'rows' => '2', 'new_lines' => 'br'])
        ->addText('phone', ['label' => 'Telefon firmowy'])
        ->addText('email', ['label' => 'Email firmowy'])
        ->addText('facebook')
    ->addTab('Header', ['placement' => 'left'])
        ->addImage('logo')
    ->addTab('Stopka', ['placement' => 'left'])
        ->addText('copyright')
        ->addImage('iqlogo', ['label' => 'Wykonanie']);

return $option_page;