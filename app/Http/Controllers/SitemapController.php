<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Services;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $staticUrls = collect(Route::getRoutes()->getRoutes())
            ->filter(function ($route): bool {
                if (! in_array('GET', $route->methods(), true)) {
                    return false;
                }

                if (str_contains($route->uri(), '{')) {
                    return false;
                }

                if (str_starts_with($route->uri(), '_')) {
                    return false;
                }

                return $route->getName() !== null;
            })
            ->map(function ($route): array {
                return [
                    'loc' => route($route->getName()),
                    'lastmod' => now()->toAtomString(),
                    'changefreq' => 'weekly',
                    'priority' => '0.8',
                ];
            })
            ->unique('loc')
            ->values();

        $blogUrls = Blogs::query()
            ->where('status', 1)
            ->with('translations')
            ->get()
            ->map(function (Blogs $blog): ?array {
                $translation = $blog->translation('tr') ?? $blog->translations->first();

                if ($translation === null || empty($translation->title)) {
                    return null;
                }

                return [
                    'loc' => route('blog.show', [
                        'blog' => $blog->id,
                        'slug' => Str::slug($translation->title),
                    ]),
                    'lastmod' => optional($blog->updated_at)->toAtomString() ?? now()->toAtomString(),
                    'changefreq' => 'monthly',
                    'priority' => '0.7',
                ];
            })
            ->filter()
            ->values();

        $serviceUrls = Services::query()
            ->where('is_active', true)
            ->get()
            ->map(function (Services $service): array {
                return [
                    'loc' => route('services.show', ['service' => $service->slug]),
                    'lastmod' => optional($service->updated_at)->toAtomString() ?? now()->toAtomString(),
                    'changefreq' => 'weekly',
                    'priority' => '0.7',
                ];
            })
            ->values();

        $urls = $staticUrls
            ->concat($blogUrls)
            ->concat($serviceUrls)
            ->unique('loc')
            ->values();

        return response()
            ->view('sitemap.index', ['urls' => $urls], 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
    }
}
