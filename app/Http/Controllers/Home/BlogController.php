<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\PageController;
use App\Models\Blogs;
use App\Services\BlogsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class BlogController extends PageController
{
    public function __construct(public BlogsService $blogs_service) {}

    public function index(): View
    {
        $blogs = $this->blogs_service->getBlogs();

        return view('pages.blog.index', [
            'blogs' => $blogs,
            'pageTitle' => 'Blog | MyWerker Rehberler ve Usta İçerikleri',
            'metaDescription' => 'MyWerker Blog ile tamirat, tadilat, bakım ve usta seçimi hakkında güncel rehberleri inceleyin. Kullanıcılar ve ustalar için açıklayıcı içerikler.',
            'canonicalUrl' => route('blog'),
            'ogTitle' => 'MyWerker Blog - Rehberler ve Uzman İçerikler',
            'ogDescription' => 'Ev bakımı, tamirat süreçleri ve doğru usta seçimi için kurumsal, açıklayıcı ve güncel blog içerikleri.',
            'ogType' => 'website',
        ]);
    }

    public function show(Blogs $blog, ?string $slug = null): View|RedirectResponse
    {
        $blog->loadMissing('translations');

        $translation = $blog->translation('tr') ?? $blog->translations->first();

        abort_if($translation === null, 404);

        $canonicalSlug = Str::slug($translation->title ?? 'blog-detay');

        if ($slug !== null && $slug !== $canonicalSlug) {
            return redirect()->route('blog.show', [
                'blog' => $blog->id,
                'slug' => $canonicalSlug,
            ]);
        }

        $contentPreview = Str::limit(strip_tags((string) $translation->content), 170);
        $description = Str::limit(strip_tags((string) ($translation->desc ?: $translation->content)), 155);
        $keywords = trim((string) ($translation->keywords ?? ''));
        $relatedBlogs = Blogs::query()
            ->where('status', 1)
            ->whereKeyNot($blog->id)
            ->with('translations')
            ->latest('id')
            ->limit(3)
            ->get();

        return view('pages.blog.show', [
            'blog' => $blog,
            'blogTranslation' => $translation,
            'relatedBlogs' => $relatedBlogs,
            'pageTitle' => ($translation->title ?? 'Blog Detayı') . ' | MyWerker Blog',
            'metaDescription' => $description,
            'canonicalUrl' => route('blog.show', ['blog' => $blog->id, 'slug' => $canonicalSlug]),
            'ogTitle' => ($translation->title ?? 'Blog Detayı') . ' | MyWerker',
            'ogDescription' => $description,
            'ogType' => 'article',
            'metaKeywords' => $keywords,
            'contentPreview' => $contentPreview,
        ]);
    }
}
