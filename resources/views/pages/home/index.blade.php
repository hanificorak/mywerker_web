@push('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "Organization",
                "@@id": "{{ url()->current() }}#organization",
                "name": "MyWerker",
                "url": "{{ config('app.url') }}",
                "description": "Türkiye'nin güvenilir usta ve tamirat hizmeti platformu. İlan oluşturun, teklif alın, onaylı ustalarla çalışın.",
                "address": {
                    "@@type": "PostalAddress",
                    "streetAddress": "Levent, Büyükdere Cd. No:123",
                    "addressLocality": "İstanbul",
                    "addressCountry": "TR"
                },
                "contactPoint": {
                    "@@type": "ContactPoint",
                    "telephone": "+90-212-123-45-67",
                    "contactType": "customer service",
                    "areaServed": "TR",
                    "availableLanguage": "Turkish"
                }
            },
            {
                "@@type": "WebSite",
                "@@id": "{{ url()->current() }}#website",
                "url": "{{ config('app.url') }}",
                "name": "MyWerker",
                "description": "Evinizdeki sorunlara profesyonel çözümler. Ücretsiz ilan verin, ustalardan teklif alın.",
                "publisher": { "@@id": "{{ url()->current() }}#organization" }
            },
            {
                "@@type": "HowTo",
                "name": "MyWerker ile Nasıl Usta Bulunur?",
                "description": "3 basit adımda evinizdeki tamirat ve tadilat işleri için güvenilir usta bulun.",
                "step": [
                    {
                        "@@type": "HowToStep",
                        "position": 1,
                        "name": "İlan Oluştur",
                        "text": "İhtiyacınız olan hizmeti detaylandırın. Ücretsiz olarak ilanınızı yayınlayın ve uzmanlara duyurun."
                    },
                    {
                        "@@type": "HowToStep",
                        "position": 2,
                        "name": "Teklifleri Al",
                        "text": "Bölgenizdeki profesyonellerden gelen teklifleri inceleyin. Fiyat ve süre karşılaştırması yapın."
                    },
                    {
                        "@@type": "HowToStep",
                        "position": 3,
                        "name": "Uzmanı Seç",
                        "text": "Profil puanlarına ve yorumlara bakarak size en uygun ustayı seçin ve işe başlayın."
                    }
                ]
            }
        ]
    }
    </script>
@endpush

@extends('layouts.app')

@section('content')
    <main id="main" role="main">
        @include('pages.home.header')
        @include('pages.home.stats')
        @include('pages.home.blogs')
        @include('pages.home.howit')
        @include('pages.home.services')
        @include('pages.home.services_list')

        <section class="bg-gray-900 mx-8 my-16 rounded-3xl py-20 text-center" aria-labelledby="cta-heading">
            <h2 id="cta-heading" class="text-4xl font-black text-white mb-4">
                Eviniz İçin En İyisini İsteyin
            </h2>
            <p class="text-gray-400 mb-10 max-w-md mx-auto">
                Hemen ücretsiz ilan oluşturun, binlerce onaylı usta arasından
                size en uygun olanı seçin. MyWerker güvencesiyle işlerinizi
                kolayca halledin.
            </p>
            <nav class="flex items-center justify-center gap-4 flex-wrap" aria-label="Kayıt ve ilan aksiyonları">
                <a href="#"
                    class="bg-[#FF6B00] text-white px-8 py-3.5 rounded-xl font-semibold hover:bg-[#e05a00] transition inline-block">
                    Ücretsiz İlan Ver
                </a>
                <a href="#"
                    class="border border-gray-600 text-white px-8 py-3.5 rounded-xl font-semibold hover:border-gray-400 transition inline-block">
                    Usta Olarak Kaydol
                </a>
            </nav>
        </section>
    </main>
@endsection
