<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\PageController;
use Illuminate\Contracts\View\View;

class ContactController extends PageController
{
    public function index(): View
    {
        return view('pages.contact.index', [
            'pageTitle' => 'İletişim | Nubify Software',
            'metaDescription' => 'Nubify Software iletişim bilgileri: telefon, e-posta ve şirket bilgileri.',
            'canonicalUrl' => route('contact'),
            'ogTitle' => 'İletişim - Nubify Software',
            'ogDescription' => 'Nubify Software iletişim sayfası. Telefon ve e-posta bilgilerimize buradan ulaşabilirsiniz.',
            'ogType' => 'website',
        ]);
    }
}
