<?php

use App\Models\Language;
use App\Models\Block;

function Languages(){
    $language=Language::all();
    return $language;
}
function Block(){
    $blocks=Block::all();
    return $blocks;
}
