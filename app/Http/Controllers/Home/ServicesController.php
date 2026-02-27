<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\PageController;
use App\Models\Services;
use App\Services\CategoriesService;
use Illuminate\Contracts\View\View;

class ServicesController extends PageController
{
    public function __construct(public CategoriesService $category_service) {}

    public function index(): View
    {
        $categories = $this->category_service->getCategories();

        return view('pages.services.index', [
            'categories' => $categories,
            'pageTitle' => 'Hizmetler | MyWerker Usta ve Tamirat Kategorileri',
            'metaDescription' => 'MyWerker hizmet kategorilerini inceleyin. Boya, tesisat, elektrik, çatı, temizlik ve daha birçok alanda doğru ustayı hızlıca bulun.',
            'canonicalUrl' => route('services'),
            'ogTitle' => 'MyWerker Hizmetler - Usta Kategorileri',
            'ogDescription' => 'Kategorilere göre hizmetleri görüntüleyin, ihtiyacınıza uygun ustaları keşfedin ve teklif sürecini başlatın.',
            'ogType' => 'website',
        ]);
    }

    public function show(Services $service): View
    {
        return view('pages.home.services_detail', [
            'service' => $service,
            'pageTitle' => $service->title . ' | MyWerker Hizmet Detayı',
            'metaDescription' => $service->description ?: ($service->title . ' hizmeti için MyWerker üzerinden uzman bulabilir ve teklif sürecini başlatabilirsiniz.'),
            'canonicalUrl' => route('services.show', ['service' => $service->slug]),
            'ogTitle' => $service->title . ' | MyWerker',
            'ogDescription' => $service->description ?: ($service->title . ' hizmet detaylarını inceleyin.'),
            'ogType' => 'article',
        ]);
    }
}
