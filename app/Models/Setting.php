<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Setting extends Model
{
    use HasFactory;
    protected $fillable=[
        'logo',
        'footer_logo',
        'favicon',
        'default_banner',
        'default_lang',
        'contact_fields'
    ];

    public function lang(): BelongsTo
    {
        return $this->belongsTo(Language::class,'language_id','id');
    }

    public function getContactFieldsAttribute($value)
    {
        return json_decode($value);
    }
}
