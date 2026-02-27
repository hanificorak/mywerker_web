<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['slug', 'image'];


    public function translations(): HasMany
    {
        return $this->hasMany(CategoryTranslate::class);
    }

    public function translation($lang = 'tr')
    {
        return $this->translations
            ->where('lang', $lang)
            ->first();
    }
}
