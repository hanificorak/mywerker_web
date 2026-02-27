<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\CategoryTranslate;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Elektrikçi',
            'Tesisatçı',
            'Boya Ustası',
            'Marangoz',
            'Çilingir',
            'Kombi & Klima Servisi',
            'Beyaz Eşya Servisi',
            'Fayans Ustası',
            'Çatı Ustası',
            'Genel Tamirci'
        ];

        foreach ($categories as $name) {
            // Category oluştur
            $category = Category::create([
                'slug' => \Str::slug($name),
                'image' => null
            ]);

            // CategoryTranslate oluştur
            CategoryTranslate::create([
                'category_id' => $category->id,
                'lang' => 'tr',
                'name' => $name
            ]);
        }
    }
}