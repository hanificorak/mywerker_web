    @php
        $isHomeRoute = request()->routeIs('home');
        $isHowItWorksRoute = request()->routeIs('howitworks');
        $isServicesRoute = request()->routeIs('services') || request()->routeIs('services.show');
        $isBlogRoute = request()->routeIs('blog') || request()->routeIs('blog.show');
        $isContactRoute = request()->routeIs('contact');
    @endphp

    <nav class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur">
        <div class="border-b border-slate-100 bg-slate-50">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 text-xs sm:px-6 lg:px-8">
                <div class="hidden items-center gap-2 text-slate-600 md:flex">
                    <span
                        class="inline-flex items-center rounded-md bg-white px-2.5 py-1 font-medium ring-1 ring-slate-200">%100
                        Ücretsiz</span>
                    <span
                        class="inline-flex items-center rounded-md bg-white px-2.5 py-1 font-medium ring-1 ring-slate-200">Android
                        & IOS</span>
                </div>
                <div class="ml-auto flex items-center gap-4 text-slate-600">
                    <a href="#" class="hidden font-medium transition hover:text-slate-900 md:inline">Nubify Software</a>
                    
                    <a href="#"
                        class="inline-flex items-center gap-2 rounded-md bg-[#FF6B00] px-3.5 py-1.5 font-semibold text-white shadow-sm transition hover:bg-[#E05A00]">
                        Uygulamayı İndir
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v10m0 0l-3-3m3 3l3-3m-9 8h12" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}"
                class="group flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3 py-2 shadow-sm transition hover:border-slate-300 hover:shadow"
                aria-label="MyWerker ana sayfa">
                <img src="{{ asset('images/my_werker.jpg') }}" alt="MyWerker"
                    class="h-11 w-auto object-contain rounded-xl" loading="eager"
                    onerror="this.classList.add('hidden'); this.nextElementSibling.classList.remove('hidden');" />
                <span
                    class="hidden rounded-md bg-slate-900 px-2.5 py-2 text-sm font-bold tracking-wide text-white">MW</span>
                <span class="text-xl font-extrabold tracking-tight text-slate-900">My<span
                        class="text-[#FF6B00]">Werker</span></span>
            </a>

            <div class="hidden items-center rounded-xl border border-slate-200 bg-white p-1 lg:flex">
                <a href="{{ route('home') }}"
                    class="{{ $isHomeRoute ? 'bg-slate-900 text-white' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }} rounded-lg px-4 py-2 text-sm font-semibold transition">Ana
                    Sayfa</a>
                <a href="{{ route('howitworks') }}"
                    class="{{ $isHowItWorksRoute ? 'bg-slate-900 text-white' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }} rounded-lg px-4 py-2 text-sm font-semibold transition">Nasıl
                    Çalışır</a>
                <a href="{{ route('services') }}"
                    class="{{ $isServicesRoute ? 'bg-slate-900 text-white' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }} rounded-lg px-4 py-2 text-sm font-semibold transition">Hizmetler</a>
                <a href="{{ route('blog') }}"
                    class="{{ $isBlogRoute ? 'bg-slate-900 text-white' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }} rounded-lg px-4 py-2 text-sm font-semibold transition">Blog
                    & Makale</a>
                <a href="{{ route('contact') }}"
                    class="{{ $isContactRoute ? 'bg-slate-900 text-white' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900' }} rounded-lg px-4 py-2 text-sm font-semibold transition">İletişim</a>
            </div>

            <div class="flex items-center gap-2 sm:gap-3">
                
                <a href="#"
                    class="inline-flex items-center gap-2 rounded-md bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-slate-700">
                    Play Store & Apple Store
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
