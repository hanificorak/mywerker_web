<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blogs extends Model
{
    protected $fillable = ['image', 'status'];

    public function translations(): HasMany
    {
        return $this->hasMany(BlogsTranslate::class, 'blog_id', 'id');
    }

    public function translation($lang = 'tr')
    {
        return $this->translations
            ->where('lang', $lang)
            ->first();
    }
}
