<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\PageController;
use Illuminate\Contracts\View\View;

class WaitingController extends PageController
{
    public function index(): View
    {
        return view('pages.waiting.index', [
            'pageTitle' => 'Çok Yakında | MyWerker Mobil Uygulama',
            'metaDescription' => 'MyWerker mobil uygulaması çok yakında Android ve iOS için tüm marketlerde yayında olacak.',
            'canonicalUrl' => route('waiting'),
            'ogTitle' => 'MyWerker Mobil Uygulama Çok Yakında',
            'ogDescription' => 'Android ve iOS marketleri için yayın sürecimiz devam ediyor. Güncel duyurular için iletişim sayfasını ziyaret edin.',
            'ogType' => 'website',
        ]);
    }
}
