<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}" />
    <meta name="description"
        content="{{ $metaDescription ?? 'MyWerker ile evinizdeki tamirat, tadilat ve dekorasyon işleriniz için ücretsiz ilan oluşturun. Onaylı ustalardan teklif alın, en uygun profesyoneli seçin. Türkiye\'nin güvenilir usta platformu.' }}" />
    <meta property="og:type" content="{{ $ogType ?? 'website' }}" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:title" content="{{ $ogTitle ?? 'MyWerker - Evinizdeki Sorunlara Profesyonel Çözümler' }}" />
    <meta property="og:description"
        content="{{ $ogDescription ?? ($metaDescription ?? 'İş ilanı oluşturun, teklifleri alın, en iyi ustayı seçin. Tamirat ve tadilat için güvenilir çözüm ortağınız.') }}" />
    <meta property="og:url" content="{{ $canonicalUrl ?? url()->current() }}" />
    <meta property="og:site_name" content="MyWerker" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $ogTitle ?? 'MyWerker - Evinizdeki Sorunlara Profesyonel Çözümler' }}" />
    <meta name="twitter:description"
        content="{{ $ogDescription ?? ($metaDescription ?? 'İş ilanı oluşturun, teklifleri alın, en iyi ustayı seçin.') }}" />
    <title>{{ $pageTitle ?? 'MyWerker - Evinizdeki Sorunlara Profesyonel Çözümler' }}</title>
    @stack('head')
    @vite('resources/css/app.css')
    <link rel="preload" href="/customfont.css?ver=1" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link href="/customfont.css?ver=1" rel="stylesheet" />
    </noscript>

    <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.ico">

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6CSLS1KWD2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6CSLS1KWD2');
</script>
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        .hero-img-container {
            background: linear-gradient(135deg, #f0f0f0 0%, #e0e0e0 100%);
            border-radius: 1.5rem;
            overflow: hidden;
            position: relative;
        }

        .badge-overlay {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            background: white;
            border-radius: 0.75rem;
            padding: 0.5rem 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-divider {
            border-right: 1px solid #e5e7eb;
        }

        .category-card {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            aspect-ratio: 1/1;
            cursor: pointer;
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .category-card:hover img {
            transform: scale(1.05);
        }

        .category-card .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 0.7) 0%,
                    transparent 60%);
        }

        .category-card .info {
            position: absolute;
            bottom: 0.75rem;
            left: 0.75rem;
            color: white;
        }

        .step-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem 1.5rem;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
            position: relative;
            text-align: center;
        }

        .step-num {
            background: #ff6b00;
            color: white;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.875rem;
            position: absolute;
            top: -1rem;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>

<body class="bg-white text-gray-900">
    @include('layouts.navbar')
    @yield('content')
    <footer class="bg-white border-t border-gray-100 pt-14 pb-8">
    <div class="max-w-7xl mx-auto px-8">
        <div class="grid grid-cols-4 gap-12 mb-12">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center">
                        <span class="text-white font-bold text-xs">M</span>
                    </div>
                    <span class="font-bold text-lg">MyWerker</span>
                </div>
                <p class="text-gray-500 text-sm mb-6">
                    Evinizin tüm ihtiyaçları için güvenilir çözüm
                    ortağınız.
                </p>
                <div class="flex items-center gap-3">
                    <a href="#"
                        class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200">
                        <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200">
                        <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200">
                        <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200">
                        <svg class="w-4 h-4 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold mb-4">Hızlı Bağlantılar</h4>
                <ul class="space-y-2 text-sm text-gray-500">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-gray-900">Ana Sayfa</a>
                    </li>
                    <li>
                        <a href="{{ route('howitworks') }}" class="hover:text-gray-900">Nasıl Çalışır</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="hover:text-gray-900">Hizmetler</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="hover:text-gray-900">Blog</a>
                    </li>
                    <li>
                        <a href="https://nubifysoftware.com/contact" class="hover:text-gray-900">İletişim</a>
                    </li>
                </ul>
            </div>
          
         
        </div>
        <div class="border-t border-gray-100 pt-6 flex items-center justify-between text-sm text-gray-400">
            <span>© 2026 MyWerker. Tüm hakları saklıdır.</span>
            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-gray-900">Gizlilik Politikası</a>
                <a href="#" class="hover:text-gray-900">Kullanım Şartları</a>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
