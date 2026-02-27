@push('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "WebPage",
                "name": "MyWerker Hizmetler",
                "url": "{{ route('services') }}",
                "description": "MyWerker hizmet kategorilerini inceleyin ve ihtiyacınıza uygun ustaları keşfedin."
            },
            {
                "@@type": "ItemList",
                "name": "MyWerker Hizmet Kategorileri",
                "numberOfItems": "{{ isset($categories) ? count($categories) : 0 }}"
            }
        ]
    }
    </script>
@endpush

@extends('layouts.app')

@section('content')
    <main id="main" role="main" class="bg-slate-50/30">
        <section class="border-b border-orange-100 bg-gradient-to-b from-orange-50/40 to-white py-16">
            <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[1.15fr_0.85fr] lg:items-center lg:px-8">
                <div>
                    <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-orange-200 bg-white px-3.5 py-1.5 text-xs font-semibold text-[#FF6B00]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#FF6B00]"></span>
                        Hizmet Kategorileri
                    </p>
                    <h1 class="max-w-3xl text-4xl font-bold leading-[1.2] text-slate-900 md:text-5xl">
                        İhtiyacınıza uygun
                        <span class="text-[#FF6B00]">doğru hizmeti</span>
                        tek sayfada keşfedin
                    </h1>
                    <p class="mt-5 max-w-2xl text-base leading-8 text-slate-600">
                        MyWerker'da kullanıcılar ihtiyaçlarına göre kategori seçer, ilgili ustalardan teklif alır ve en doğru eşleşme ile süreci başlatır.
                        Tüm hizmet alanları sade ve anlaşılır bir yapıda listelenir.
                    </p>
                    <div class="mt-7 flex flex-wrap items-center gap-3">
                        <a href="#services-heading" class="inline-flex items-center rounded-md bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">
                            Kategorileri İncele
                        </a>
                        <a href="{{ route('howitworks') }}" class="inline-flex items-center rounded-md border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-slate-400 hover:text-slate-900">
                            Nasıl Çalışır?
                        </a>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <article class="rounded-xl border border-slate-200 bg-white p-5">
                        <p class="text-sm font-semibold text-slate-500">Aktif Usta</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900">10K+</p>
                    </article>
                    <article class="rounded-xl border border-slate-200 bg-white p-5">
                        <p class="text-sm font-semibold text-slate-500">Kapsam</p>
                        <p class="mt-2 text-3xl font-bold text-slate-900">81 İl</p>
                    </article>
                    <article class="rounded-xl border border-orange-100 bg-white p-5 sm:col-span-2">
                        <p class="text-sm font-semibold text-slate-500">Hizmet Modeli</p>
                        <p class="mt-2 text-lg font-semibold text-slate-900">Kategori seç, teklifleri karşılaştır, doğru ustayla işe başla.</p>
                    </article>
                </div>
            </div>
        </section>

        @include('pages.home.services')

        <section class="pb-16 pt-6">
            <div class="mx-auto grid max-w-7xl gap-6 px-6 lg:grid-cols-2 lg:px-8">
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h2 class="text-xl font-bold text-slate-900">Kullanıcılar İçin</h2>
                    <ul class="mt-4 space-y-3 text-sm leading-7 text-slate-600">
                        <li>İhtiyaca uygun kategoriyi seçerek hızlı ilan oluşturma</li>
                        <li>Birden fazla ustadan teklif alıp karşılaştırma yapma</li>
                        <li>Doğru hizmet sağlayıcıyla güvenli şekilde eşleşme</li>
                    </ul>
                </article>

                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h2 class="text-xl font-bold text-slate-900">Ustalar İçin</h2>
                    <ul class="mt-4 space-y-3 text-sm leading-7 text-slate-600">
                        <li>Uzmanlık alanına uygun gerçek iş taleplerine erişim</li>
                        <li>Teklif vererek sürdürülebilir müşteri akışı oluşturma</li>
                        <li>Platform üzerinden düzenli ve şeffaf iş yönetimi</li>
                    </ul>
                </article>
            </div>
        </section>
    </main>
@endsection
