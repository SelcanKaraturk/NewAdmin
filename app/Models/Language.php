<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Language extends Model
{
    use HasFactory;
    protected $fillable=['name','slug','img','language_value'];
    public $timestamps = false;


    public function settings(): hasOne
    {
        return $this->hasOne(Setting::class);
    }

    public function getLanguageValueAttribute($value)
    {
        return json_decode($value);
   }


}
