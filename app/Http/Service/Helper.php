<?php

use App\Models\Language;

function Languages(){
    $language=Language::all();
    return $language;
}
