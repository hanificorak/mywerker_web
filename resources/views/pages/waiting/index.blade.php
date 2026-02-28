@push('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebPage",
        "name": "MyWerker Uygulama Çok Yakında",
        "url": "{{ route('waiting') }}",
        "description": "MyWerker mobil uygulaması çok yakında Android ve iOS marketlerinde yayında olacak."
    }
    </script>
@endpush

@extends('layouts.app')

@section('content')
    <main id="main" role="main" class="bg-slate-50/30">
        <section class="relative overflow-hidden border-b border-orange-100 bg-gradient-to-b from-orange-50/50 to-white py-16">
            <div class="pointer-events-none absolute -top-20 right-0 h-64 w-64 rounded-full bg-orange-200/30 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-24 left-0 h-72 w-72 rounded-full bg-slate-200/40 blur-3xl"></div>

            <div class="relative mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:px-8">
                <div>
                    <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-orange-200 bg-white px-3.5 py-1.5 text-xs font-semibold text-[#FF6B00]">
                        <span class="h-1.5 w-1.5 rounded-full bg-[#FF6B00]"></span>
                        Çok Yakında
                    </p>

                    <h1 class="max-w-3xl text-4xl font-bold leading-[1.2] text-slate-900 md:text-5xl">
                        MyWerker mobil uygulaması
                        <span class="text-[#FF6B00]">çok yakında</span>
                        yayında
                    </h1>

                    <p class="mt-5 max-w-2xl text-base leading-8 text-slate-600">
                        Android ve iOS için mobil uygulamamız çok yakında tüm marketlerde yayında olacak.
                        Güncel duyurular ve iş birlikleri için bizimle iletişime geçebilirsiniz.
                    </p>

                    <div class="mt-8 flex flex-wrap items-center gap-3">
                        <a href="{{ route('contact') }}" class="inline-flex items-center rounded-md bg-slate-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700">
                            İletişim Sayfasına Git
                        </a>
                        <a href="{{ route('home') }}" class="inline-flex items-center rounded-md border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-slate-400 hover:text-slate-900">
                            Ana Sayfaya Dön
                        </a>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <article class="rounded-xl border border-slate-200 bg-white p-5">
                        <p class="text-sm font-semibold text-slate-500">Platform</p>
                        <p class="mt-2 text-2xl font-bold text-slate-900">Android</p>
                        <p class="mt-1 text-xs leading-6 text-slate-500">Google Play üzerinde yayına hazırlanıyor.</p>
                    </article>

                    <article class="rounded-xl border border-slate-200 bg-white p-5">
                        <p class="text-sm font-semibold text-slate-500">Platform</p>
                        <p class="mt-2 text-2xl font-bold text-slate-900">iOS</p>
                        <p class="mt-1 text-xs leading-6 text-slate-500">App Store yayını için son kontroller devam ediyor.</p>
                    </article>

                    <article class="rounded-xl border border-orange-100 bg-white p-5 shadow-sm sm:col-span-2">
                        <p class="text-sm font-semibold text-slate-500">Durum</p>
                        <p class="mt-2 text-lg font-semibold text-slate-900">Tüm marketlerde yayına çıkış süreci aktif olarak devam ediyor.</p>
                    </article>
                </div>
            </div>
        </section>

    </main>
@endsection
