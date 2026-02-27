<section class="py-14" aria-labelledby="services-heading">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-10 grid gap-6 lg:grid-cols-[1fr_auto] lg:items-end">
            <div>
                <p class="mb-3 inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-3.5 py-1.5 text-xs font-semibold uppercase tracking-[0.14em] text-[#FF6B00]">
                    <span class="h-1.5 w-1.5 rounded-full bg-[#FF6B00]"></span>
                    Premium Hizmet Kataloğu
                </p>
                <h2 id="services-heading" class="max-w-3xl text-3xl font-black leading-tight text-slate-900 md:text-4xl">
                    Uzmanlık alanlarına göre
                    <span class="text-[#FF6B00]">doğru ustayı</span>
                    daha hızlı bulun
                </h2>
                <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-600">
                    Kategorilere göre filtrelenmiş hizmet yapısı sayesinde kullanıcılar doğru ilana, ustalar da doğru işe daha kısa sürede ulaşır.
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3">
                <span class="inline-flex items-center rounded-md border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-600">10K+ Uzman</span>
                <span class="inline-flex items-center rounded-md border border-slate-200 bg-white px-3 py-2 text-xs font-semibold text-slate-600">81 İl Kapsam</span>
                <a href="{{ route('home') }}#services-heading"
                    class="inline-flex items-center gap-2 rounded-md bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-700"
                    aria-label="Tüm hizmet kategorilerini görüntüle">
                    Tüm Hizmetler
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

        <ul class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4" role="list">
            @foreach ($categories as $item)
                <li>
                    <a href="#"
                        class="group relative block overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-[0_10px_30px_rgba(15,23,42,0.08)] transition hover:-translate-y-1 hover:shadow-[0_16px_40px_rgba(15,23,42,0.14)]"
                        aria-label="{{ $item->translation('tr')->name ?? '' }} hizmet kategorisi">
                        <div class="relative aspect-square overflow-hidden">
                            <img
                                src="{{ $item->image }}"
                                alt="{{ $item->translation('tr')->name ?? '' }} hizmeti"
                                width="420"
                                height="420"
                                loading="lazy"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/85 via-slate-900/25 to-transparent"></div>

                            <span class="absolute left-3 top-3 inline-flex items-center rounded-md border border-white/35 bg-white/20 px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.12em] text-white backdrop-blur">
                                Popüler
                            </span>

                            <span class="absolute right-3 top-3 inline-flex h-8 w-8 items-center justify-center rounded-full border border-white/40 bg-white/20 text-white backdrop-blur">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </span>

                            <div class="absolute inset-x-0 bottom-0 p-4">
                                <p class="text-lg font-extrabold text-white">{{ $item->translation('tr')->name ?? '' }}</p>
                                <p class="mt-1 text-xs font-medium text-slate-200">350+ aktif teklif veren usta</p>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
