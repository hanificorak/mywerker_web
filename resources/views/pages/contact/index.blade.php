@extends('layouts.app')

@section('content')
    <main id="main" role="main" class="bg-slate-50/30">
        <section class="border-b border-orange-100 bg-gradient-to-b from-orange-50/40 to-white py-16">
            <div class="mx-auto max-w-5xl px-6 lg:px-8">
                <p
                    class="mb-4 inline-flex items-center gap-2 rounded-full border border-orange-200 bg-white px-3.5 py-1.5 text-xs font-semibold text-[#FF6B00]">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#FF6B00]"></span>
                    İletişim Bilgileri
                </p>
                <h1 class="text-4xl font-bold leading-tight text-slate-900 md:text-5xl">Nubify Software</h1>
                <p class="mt-5 max-w-2xl text-base leading-8 text-slate-600">
                    Bizimle aşağıdaki iletişim kanallarından doğrudan iletişime geçebilirsiniz.
                </p>
            </div>
        </section>

        <section class="py-14">
            <div class="mx-auto grid max-w-5xl gap-5 px-6 lg:grid-cols-3 lg:px-8">
                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Şirket</p>
                    <p class="mt-3 text-xl font-semibold text-slate-900">Nubify Software</p>
                </article>

                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">Telefon</p>
                    <a href="tel:+905426711046"
                        class="mt-3 inline-block text-xl font-semibold text-slate-900 hover:text-[#FF6B00]">
                        +90 542 671 1046
                    </a>
                </article>

                <article class="rounded-xl border border-slate-200 bg-white p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-slate-500">E-Posta</p>
                    <a href="mailto:hanificorak@outlook.com"
                        class="mt-3 inline-block break-all text-xl font-semibold text-slate-900 hover:text-[#FF6B00]">
                        hanificorak@outlook.com
                    </a>
                </article>
            </div>
        </section>
    </main>
@endsection
