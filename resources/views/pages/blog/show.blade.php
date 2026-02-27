@push('head')
    @if (!empty($metaKeywords))
        <meta name="keywords" content="{{ $metaKeywords }}" />
    @endif

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "BlogPosting",
        "headline": "{{ addslashes($blogTranslation->title ?? '') }}",
        "description": "{{ addslashes($metaDescription ?? '') }}",
        "image": "{{ asset($blog->image ?? '') }}",
        "mainEntityOfPage": "{{ $canonicalUrl ?? url()->current() }}",
        "articleSection": "Blog",
        "keywords": "{{ addslashes($metaKeywords ?? '') }}",
        "publisher": {
            "@@type": "Organization",
            "name": "MyWerker"
        }
    }
    </script>
@endpush

@extends('layouts.app')

@section('content')
    <main id="main" role="main" class="bg-slate-50/30">
        <article class="border-b border-orange-100 bg-gradient-to-b from-orange-50/40 to-white py-12">
            <div class="mx-auto max-w-5xl px-6 lg:px-8">
                <a href="{{ route('blog') }}" class="mb-5 inline-flex items-center gap-2 text-sm font-semibold text-[#FF6B00] hover:text-[#E05A00]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Blog Listesine Dön
                </a>

             

                <h1 class="text-3xl font-bold leading-tight text-slate-900 md:text-4xl">
                    {{ $blogTranslation->title }}
                </h1>

                <p class="mt-4 max-w-3xl text-base leading-8 text-slate-600">
                    {{ $blogTranslation->desc }}
                </p>

                @if (!empty($metaKeywords))
                    <div class="mt-5 flex flex-wrap gap-2">
                        @foreach (explode(',', $metaKeywords) as $keyword)
                            <span class="rounded-md border border-slate-200 bg-white px-2.5 py-1 text-xs font-medium text-slate-600">#{{ trim($keyword) }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
        </article>

        <section class="py-10">
            <div class="mx-auto max-w-5xl px-6 lg:px-8">
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white">
                    <img
                        src="{{ asset($blog->image) }}"
                        alt="{{ $blogTranslation->title }}"
                        class="h-[360px] w-full object-cover"
                    />
                </div>

                <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-7 text-[15px] leading-8 text-slate-700">
                    {!! nl2br(e($blogTranslation->content ?? $contentPreview ?? '')) !!}
                </div>
            </div>
        </section>

        @if (($relatedBlogs ?? collect())->isNotEmpty())
            <section class="pb-16">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mb-6 flex items-center justify-between">
                        <h2 class="text-2xl font-bold text-slate-900">İlgili Yazılar</h2>
                        <a href="{{ route('blog') }}" class="text-sm font-semibold text-[#FF6B00] hover:text-[#E05A00]">Tümünü Gör</a>
                    </div>

                    <div class="grid gap-6 md:grid-cols-3">
                        @foreach ($relatedBlogs as $related)
                            <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                                <a href="{{ route('blog.show', ['blog' => $related->id, 'slug' => \Illuminate\Support\Str::slug($related->translation('tr')->title ?? 'blog-detay')]) }}" class="block">
                                    <img
                                        src="{{ asset($related->image) }}"
                                        alt="{{ $related->translation('tr')->title ?? 'Blog yazısı' }}"
                                        class="h-44 w-full object-cover"
                                        loading="lazy"
                                    />
                                    <div class="p-5">
                                        <h3 class="line-clamp-2 text-lg font-semibold leading-7 text-slate-900">{{ $related->translation('tr')->title ?? '' }}</h3>
                                        <p class="mt-3 line-clamp-3 text-sm leading-7 text-slate-600">{{ \Illuminate\Support\Str::limit(strip_tags($related->translation('tr')->desc ?? ''), 130) }}</p>
                                    </div>
                                </a>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection
