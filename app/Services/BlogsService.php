<?php

namespace App\Services;

use App\Models\Blogs;

class BlogsService
{
    public function getBlogs()
    {
        return Blogs::query()
            ->where('status', 1)
            ->with('translations')
            ->latest('id')
            ->get();
    }
}
