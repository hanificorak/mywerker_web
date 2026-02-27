<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        'city',
        'service',
        'slug',
        'description',
        'is_active',
        'title',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
