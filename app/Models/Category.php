<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'sorted',
        'block_id',
        'status',
        'file',
        'file2',
        'file3',
        'parent_id',
    ];

    public function category_language(): HasOne
    {
        return $this->hasOne(CategoryLanguage::class);

    }
}
