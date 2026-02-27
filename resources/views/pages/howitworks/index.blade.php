@push('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "WebPage",
                "name": "MyWerker Nasıl Çalışır?",
                "url": "{{ route('howitworks') }}",
                "description": "Kullanıcıların ilan oluşturduğu, ustaların teklif vererek iş aldığı MyWerker iş akışını adım adım keşfedin."
            },
            {
                "@@type": "HowTo",
                "name": "MyWerker ile İş Eşleşmesi Süreci",
                "description": "Kullanıcı ilanı oluşturur, ustalar teklif verir ve en uygun eşleşme ile iş başlatılır.",
                "step": [
                    {
                        "@@type": "HowToStep",
                        "position": 1,
                        "name": "İlan Oluştur",
                        "text": "Kullanıcı ihtiyacını detaylandırarak ilanını platformda yayınlar."
                    },
                    {
                        "@@type": "HowToStep",
                        "position": 2,
                        "name": "Teklifleri Değerlendir",
                        "text": "Ustalar teklif verir, kullanıcı fiyat ve deneyim bilgilerine göre karşılaştırma yapar."
                    },
                    {
                        "@@type": "HowToStep",
                        "position": 3,
                        "name": "Eşleşme ve İş Başlangıcı",
                        "text": "Kullanıcı en uygun ustayı seçer, usta işi alır ve süreç başlar."
                    }
                ]
            }
        ]
    }
    </script>
@endpush

@extends('layouts.app')

@section('content')
    <main id="main" role="main" class="bg-slate-50/30">
        <section class="border-b border-slate-200 bg-white py-16">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr] lg:items-center">
                    <div>
                        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-3.5 py-1.5 text-xs font-semibold text-[#FF6B00]">
                            <span class="h-1.5 w-1.5 rounded-full bg-[#FF6B00]"></span>
                            MyWerker Nasıl Çalışır
                        </p>
                        <h1 class="max-w-3xl text-4xl font-bold leading-[1.2] text-slate-900 md:text-5xl">
                            MyWerker'da süreç nasıl işler?
                            <span class="text-[#FF6B00]">Adım adım</span>
                            kullanıcı ve usta rehberi
                        </h1>
                        <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600">
                            Bu sayfada ilan oluşturmadan işin başlamasına kadar tüm süreci açık şekilde görebilirsiniz.
                            Kullanıcı ne yapar, usta ne zaman devreye girer ve eşleşme nasıl tamamlanır adım adım anlatılır.
                        </p>
                        <div class="mt-7 flex flex-wrap items-center gap-3">
                            <a href="{{ route('home') }}#services-heading" class="inline-flex items-center rounded-md bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">
                                Hizmetleri İncele
                            </a>
                            <a href="#" class="inline-flex items-center rounded-md border border-orange-200 bg-white px-6 py-3 text-sm font-semibold text-[#FF6B00] transition hover:bg-orange-50">
                                Uygulamayı İndir
                            </a>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <article class="rounded-xl border border-slate-200 bg-white p-5">
                            <p class="text-sm font-semibold text-slate-500">Aktif Uzman</p>
                            <p class="mt-2 text-3xl font-bold text-slate-900">10K+</p>
                        </article>
                        <article class="rounded-xl border border-slate-200 bg-white p-5">
                            <p class="text-sm font-semibold text-slate-500">Kapsam</p>
                            <p class="mt-2 text-3xl font-bold text-slate-900">81 İl</p>
                        </article>
                        <article class="rounded-xl border border-orange-100 bg-white p-5 sm:col-span-2">
                            <p class="text-sm font-semibold text-slate-500">Süreç Modeli</p>
                            <p class="mt-2 text-lg font-semibold text-slate-900">İlan ver, teklif al, ustanı seç ve işi güvenle başlat.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="nasil-calisir" class="py-16">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-slate-900">3 Basit Adımda Nasıl Çalışır?</h2>
                    <p class="mt-2 max-w-2xl text-sm leading-7 text-slate-600">İlk kez kullanacak kişiler için kısa ve net süreç akışı.</p>
                </div>

                <ol class="grid gap-5 md:grid-cols-3" start="1">
                    <li class="rounded-xl border border-slate-200 bg-white p-6">
                        <p class="mb-3 text-xs font-bold uppercase tracking-[0.14em] text-orange-500">Adım 01</p>
                        <h3 class="text-lg font-semibold text-slate-900">1. Kullanıcı İlan Oluşturur</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">Kullanıcı ihtiyacını, konumu ve iş detayını girerek ilanı yayınlar. İlan, ilgili uzmanlara otomatik olarak görünür.</p>
                    </li>
                    <li class="rounded-xl border border-slate-200 bg-white p-6">
                        <p class="mb-3 text-xs font-bold uppercase tracking-[0.14em] text-orange-500">Adım 02</p>
                        <h3 class="text-lg font-semibold text-slate-900">2. Ustalar Teklif Verir</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">Ustalar fiyat, süre ve hizmet detaylarını teklif olarak iletir. Kullanıcı teklifleri tek ekranda kolayca karşılaştırır.</p>
                    </li>
                    <li class="rounded-xl border border-slate-200 bg-white p-6">
                        <p class="mb-3 text-xs font-bold uppercase tracking-[0.14em] text-orange-500">Adım 03</p>
                        <h3 class="text-lg font-semibold text-slate-900">3. Eşleşme Tamamlanır</h3>
                        <p class="mt-2 text-sm leading-7 text-slate-600">Kullanıcı en uygun ustayı seçer, usta işi onaylar ve çalışma süreci başlar. Süreç boyunca iletişim ve kontrol devam eder.</p>
                    </li>
                </ol>
            </div>
        </section>

        <section class="pb-16">
            <div class="mx-auto grid max-w-7xl gap-6 px-6 lg:grid-cols-2 lg:px-8">
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h2 class="text-xl font-bold text-slate-900">Kullanıcılar İçin Avantajlar</h2>
                    <ul class="mt-4 space-y-3 text-sm leading-7 text-slate-600">
                        <li>Tek bir ilanla birden fazla ustadan teklif alma</li>
                        <li>Fiyat, süre ve uzmanlık bilgilerine göre karşılaştırma yapma</li>
                        <li>İşi baştan sona daha kontrollü ve güvenli yönetme</li>
                    </ul>
                </article>

                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <h2 class="text-xl font-bold text-slate-900">Ustalar İçin Avantajlar</h2>
                    <ul class="mt-4 space-y-3 text-sm leading-7 text-slate-600">
                        <li>Uzmanlık alanına uygun gerçek iş taleplerine erişim</li>
                        <li>Teklif vererek düzenli iş fırsatı oluşturma</li>
                        <li>Müşterilerle net ve hızlı eşleşme sağlama</li>
                    </ul>
                </article>
            </div>
        </section>
    </main>
@endsection
