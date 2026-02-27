<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\PageController;
use App\Services\BlogsService;
use App\Services\CategoriesService;
use App\Services\ServicesService;
use Illuminate\Contracts\View\View;

class HomeController extends PageController
{
    public function __construct(
        public CategoriesService $category_service,
        public BlogsService $blogs_service,
        public ServicesService $services_serv
        
    ) {}

    public function index(): View
    {
        $categories = $this->category_service->getCategories();
        $blogs = $this->blogs_service->getBlogs()->shuffle()->take(3);
        $services = $this->services_serv->getServices();

        return view('pages.home.index', [
            'categories' => $categories,
            'blogs' => $blogs,
            'services'=>$services
        ]);
        
    }
}
