<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\PageController;
use Illuminate\Contracts\View\View;

class HowItWorksController extends PageController
{
    public function index(): View
    {
        return view('pages.howitworks.index', [
            'pageTitle' => 'MyWerker Nasıl Çalışır? | Kullanıcı ve Usta İş Akışı',
            'metaDescription' => 'MyWerker platformunda kullanıcılar ilan oluşturur, ustalar teklif verir ve iş eşleşmesi güvenli şekilde tamamlanır. Adım adım iş akışını inceleyin.',
            'canonicalUrl' => route('howitworks'),
            'ogTitle' => 'MyWerker Nasıl Çalışır? Kullanıcı ve Usta Süreci',
            'ogDescription' => 'Kullanıcı ilan açar, ustalar teklif verir, en uygun eşleşme ile iş başlar. MyWerker iş akışını adım adım keşfedin.',
            'ogType' => 'article',
        ]);
    }
}
