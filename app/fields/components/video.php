<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$video = new FieldsBuilder('video', ['label' => 'Filmik']);

$video
    ->addFile('video', ['label' => 'Filmik'])
    ->addText('title', ['label' => 'Tytuł'])
    ->addWysiwyg('desc', ['label' => 'Opis', 'media_upload' => 0])
    ->addLink('link', ['label' => 'Link']);

return $video;