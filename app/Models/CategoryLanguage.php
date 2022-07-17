<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLanguage extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'contents',
        'language_slug',
        'url',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];
}
