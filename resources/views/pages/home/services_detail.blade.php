@push('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Service",
        "name": "{{ addslashes($service->title ?? '') }}",
        "description": "{{ addslashes($metaDescription ?? '') }}",
        "areaServed": "{{ addslashes($service->city ?? '') }}",
        "provider": {
            "@@type": "Organization",
            "name": "MyWerker"
        }
    }
    </script>
@endpush

@extends('layouts.app')

@section('content')
    <main id="main" role="main" class="bg-slate-50/30">
        <section class="border-b border-orange-100 bg-gradient-to-b from-orange-50/40 to-white py-16">
            <div class="mx-auto max-w-6xl px-6 lg:px-8">
                <a href="{{ route('services') }}" class="mb-5 inline-flex items-center gap-2 text-sm font-semibold text-[#FF6B00] hover:text-[#E05A00]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Hizmet Listesine Dön
                </a>

         

                <h1 class="max-w-4xl text-4xl font-bold leading-[1.2] text-slate-900 md:text-5xl">
                    {{ $service->title }}
                </h1>

                <p class="mt-5 max-w-3xl text-base leading-8 text-slate-600">
                    {{ $service->description ?: ($service->title . ' hizmeti için MyWerker üzerinden kolayca uzman bulabilir ve teklif sürecini başlatabilirsiniz.') }}
                </p>

                <div class="mt-7 flex flex-wrap items-center gap-3">
                    <span class="inline-flex items-center rounded-md border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700">
                        Şehir: {{ strtoupper($service->city) }}
                    </span>
                    <span class="inline-flex items-center rounded-md border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700">
                        Kategori: {{ $service->service }}
                    </span>
                    <span class="inline-flex items-center rounded-md border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700">
                        Hizmet Kodu: {{ $service->slug }}
                    </span>
                </div>
            </div>
        </section>

        <section class="py-12">
            <div class="mx-auto grid max-w-6xl gap-6 px-6 lg:grid-cols-3 lg:px-8">
                <article class="rounded-xl border border-slate-200 bg-white p-6 lg:col-span-2">
                    <h2 class="text-xl font-semibold text-slate-900">Hizmet Hakkında</h2>
                    <p class="mt-4 text-sm leading-8 text-slate-600">
                        {{ $service->description ?: 'Bu hizmet için kullanıcılar ilan oluşturur, ilgili ustalar teklif verir ve en uygun eşleşme ile iş süreci başlatılır.' }}
                    </p>
                    <p class="mt-4 text-sm leading-8 text-slate-600">
                        MyWerker üzerinde bu hizmet için farklı uzmanlardan gelen teklifleri karşılaştırabilir, fiyat ve zaman planına göre karar verebilirsiniz.
                    </p>
                </article>

                <aside class="rounded-xl border border-orange-100 bg-white p-6">
                    <h3 class="text-lg font-semibold text-slate-900">Hızlı Bilgiler</h3>
                    <ul class="mt-4 space-y-2 text-sm leading-7 text-slate-600">
                        <li><span class="font-semibold text-slate-800">Başlık:</span> {{ $service->title }}</li>
                        <li><span class="font-semibold text-slate-800">Şehir:</span> {{ strtoupper($service->city) }}</li>
                        <li><span class="font-semibold text-slate-800">Hizmet:</span> {{ $service->service }}</li>
                        <li><span class="font-semibold text-slate-800">Durum:</span> {{ $service->is_active ? 'Aktif' : 'Pasif' }}</li>
                    </ul>

                    <a href="#" class="mt-6 inline-flex w-full items-center justify-center rounded-md bg-[#FF6B00] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#E05A00]">
                        Teklif Al
                    </a>
                </aside>
            </div>
        </section>
    </main>
@endsection
