<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\PageController;
use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactMessageReceived;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends PageController
{
    public function index(): View
    {
        return view('pages.contact.index', [
            'pageTitle' => 'İletişim | MyWerker',
            'metaDescription' => 'MyWerker iletişim bilgileri: telefon, e-posta ve şirket bilgileri.',
            'canonicalUrl' => route('contact'),
            'ogTitle' => 'İletişim - MyWerker',
            'ogDescription' => 'MyWerker iletişim sayfası. Telefon ve e-posta bilgilerimize buradan ulaşabilirsiniz.',
            'ogType' => 'website',
        ]);
    }

    public function store(StoreContactRequest $request): RedirectResponse
    {
        $contact = Contact::query()->create($request->validated());

        Mail::to(config('mail.contact_to', 'hanificorak@outlook.com'))
            ->send(new ContactMessageReceived($contact));

        return redirect()
            ->route('contact')
            ->with('status', 'Mesajınız başarıyla alındı. En kısa sürede dönüş yapacağız.');
    }
}
