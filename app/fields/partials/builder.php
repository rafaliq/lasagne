<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Dodaj komponent'])
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout(get_field_partial('components.video'))
            ->addLayout(get_field_partial('components.text-img'))
            ->addLayout(get_field_partial('components.icons'))
            ->addLayout(get_field_partial('components.menu'))
            ->addLayout('content', ['label' => 'Treść']);

return $builder;