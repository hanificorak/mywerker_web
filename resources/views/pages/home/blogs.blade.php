<section class="py-14" aria-labelledby="home-blog-heading">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="mb-2 text-xs font-semibold uppercase tracking-[0.14em] text-[#FF6B00]">İçerik Merkezi</p>
                <h2 id="home-blog-heading" class="text-3xl font-bold text-slate-900">Popüler Yazılarımız</h2>
                <p class="mt-2 max-w-2xl text-sm leading-7 text-slate-600">
                    Usta seçimi, ev bakımı ve tamirat süreçleriyle ilgili en çok okunan içerikleri inceleyin.
                </p>
            </div>
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 rounded-md border border-orange-200 bg-orange-50 px-4 py-2 text-sm font-semibold text-[#FF6B00] transition hover:bg-orange-100">
                Tüm Yazılar
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse (($blogs ?? collect())->take(3) as $item)
                <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <a href="{{ route('blog.show', ['blog' => $item->id, 'slug' => \Illuminate\Support\Str::slug($item->translation('tr')->title ?? 'blog-detay')]) }}" class="block">
                        <div class="relative h-52 overflow-hidden">
                            <img
                                src="{{ $item->image }}"
                                alt="{{ $item->translation('tr')->title ?? 'MyWerker blog yazısı' }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                loading="lazy"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-slate-900/10 to-transparent"></div>
                            <span class="absolute left-3 top-3 inline-flex items-center rounded-md border border-white/40 bg-white/20 px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.12em] text-white backdrop-blur">
                                Popüler
                            </span>
                        </div>

                        <div class="p-5">
                            <h3 class="line-clamp-2 text-lg font-semibold leading-7 text-slate-900">{{ $item->translation('tr')->title ?? '' }}</h3>
                            <p class="mt-3 line-clamp-3 text-sm leading-7 text-slate-600">
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->translation('tr')->desc ?? ''), 145) }}
                            </p>
                            <span class="mt-4 inline-flex items-center text-sm font-semibold text-[#FF6B00] transition group-hover:text-[#E05A00]">
                                Devamını Oku
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </a>
                </article>
            @empty
                <div class="rounded-xl border border-slate-200 bg-white p-6 text-sm text-slate-600 sm:col-span-2 lg:col-span-3">
                    Henüz yayınlanmış blog yazısı bulunmuyor.
                </div>
            @endforelse
        </div>
    </div>
</section>
