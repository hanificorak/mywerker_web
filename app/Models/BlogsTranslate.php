<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogsTranslate extends Model
{
    protected $table = 'blogs_transalte'; // tablo adı typo olduğu için şart

    protected $fillable = [
        'blog_id',
        'lang',
        'title',
        'desc',
        'content',
        'keywords'
    ];
    
    public function blogs(): BelongsTo
    {
        return $this->belongsTo(Blogs::class);
    }
}
