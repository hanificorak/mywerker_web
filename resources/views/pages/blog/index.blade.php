@push('head')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "WebPage",
                "name": "MyWerker Blog",
                "url": "{{ route('blog') }}",
                "description": "MyWerker Blog ile tamirat, tadilat, bakım ve usta seçimi hakkında güncel içerikleri keşfedin."
            },
            {
                "@@type": "Blog",
                "name": "MyWerker Blog",
                "url": "{{ route('blog') }}",
                "description": "Kullanıcılar ve ustalar için açıklayıcı rehberler, pratik bilgiler ve uzman içerikler.",
                "blogPost": [
                    @foreach (($blogs ?? collect())->take(6) as $post)
                    {
                        "@@type": "BlogPosting",
                        "headline": "{{ addslashes($post->translation('tr')->title ?? '') }}",
                        "description": "{{ addslashes(strip_tags($post->translation('tr')->desc ?? '')) }}"
                    }@if (! $loop->last),@endif
                    @endforeach
                ]
            }
        ]
    }
    </script>
@endpush

@extends('layouts.app')

@section('content')
    <main id="main" role="main" class="bg-slate-50/30">
       

        <section id="blog-grid" class="py-14">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mb-8 flex flex-wrap items-center justify-between gap-3">
                    <h2 class="text-2xl font-bold text-slate-900">MyWerker Blog</h2>
                    <p class="text-sm text-slate-500">Tamirat, bakım, usta seçimi ve süreç yönetimi</p>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
                    @foreach ($blogs as $item)
                        <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                            <a href="{{ route('blog.show', ['blog' => $item->id, 'slug' => \Illuminate\Support\Str::slug($item->translation('tr')->title ?? 'blog-detay')]) }}" class="block">
                                <div class="relative h-52 overflow-hidden">
                                    <img
                                        src="{{ $item->image }}"
                                        alt="{{ $item->translation('tr')->title }}"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                        loading="lazy"
                                    />
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-slate-900/15 to-transparent"></div>
                                    <span class="absolute left-3 top-3 inline-flex items-center rounded-md border border-white/40 bg-white/20 px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.12em] text-white backdrop-blur">
                                        Blog
                                    </span>
                                </div>
                                <div class="p-5">
                                    <h3 class="line-clamp-2 text-lg font-semibold leading-7 text-slate-900">{{ $item->translation('tr')->title }}</h3>
                                    <p class="mt-3 line-clamp-3 text-sm leading-7 text-slate-600">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($item->translation('tr')->desc ?? ''), 160) }}
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
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
