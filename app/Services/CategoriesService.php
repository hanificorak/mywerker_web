<?php

namespace App\Services;

use App\Models\Category;

class CategoriesService
{
    public function getCategories()
    {

        return Category::all();
    }
}
