<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\PageController;
use App\Services\BlogsService;
use App\Services\CategoriesService;
use App\Services\ServicesService;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class HomeController extends PageController
{
    public function __construct(
        public CategoriesService $category_service,
        public BlogsService $blogs_service,
        public ServicesService $services_serv

    ) {}

    public function index(): View
    {
        $cache = Cache::store('file');

        $categories = $cache->remember('home:categories', now()->addDays(14), function () {
            return $this->category_service->getCategories();
        });
        $blogs = $cache->remember('home:blogs', now()->addDays(14), function () {
            return $this->blogs_service->getBlogs();
        })->shuffle()->take(3);
        $services = $cache->remember('home:services', now()->addDays(14), function () {
            return $this->services_serv->getServices();
        });

        return view('pages.home.index', [
            'categories' => $categories,
            'blogs' => $blogs,
            'services' => $services,
        ]);
    }
}
