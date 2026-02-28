<header class="mx-auto grid max-w-7xl gap-12 px-6 py-16 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8" aria-labelledby="hero-heading">
    <div>
        <p class="mb-7 inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-3.5 py-1.5 text-xs font-semibold text-orange-700" role="doc-subtitle">
            <span class="h-2 w-2 rounded-full bg-[#FF6B00]" aria-hidden="true"></span>
            Kurumsal ve bireysel müşteriler için güvenilir servis yönetimi
        </p>

        <h1 id="hero-heading" class="mb-6 max-w-2xl text-4xl font-black leading-[1.15] text-slate-900 md:text-5xl">
            Kullanıcıların doğru ustayı bulduğu,
            <span class="text-[#FF6B00]">ustaların teklif vererek</span>
            işi aldığı platform
        </h1>

        <p class="mb-10 max-w-2xl text-base leading-8 text-slate-600">
            Kullanıcı ilan oluşturur, ustalar teklif verir, en uygun eşleşme ile iş hızlıca başlar.
            MyWerker, iki taraf için de güvenli ve takip edilebilir bir iş akışı sunar.
        </p>

        <nav class="mb-10 flex flex-wrap items-center gap-4" aria-label="Ana sayfa aksiyonları">
            <a href="{{ route('home') }}#services-heading"
                class="inline-flex items-center gap-2 rounded-md border border-slate-300 bg-white px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-slate-500 hover:text-slate-900">
                Hizmetleri İncele
            </a>
            <a href="#"
                class="inline-flex items-center gap-2 rounded-md bg-[#FF6B00] px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#E05A00]">
                Uygulamayı İndir
            </a>
        </nav>

        <ul class="grid gap-4 text-sm text-slate-700 sm:grid-cols-3" role="list">
            <li class="rounded-lg border border-orange-100 bg-white px-4 py-3.5 shadow-sm">
                <p class="text-xl font-black text-[#FF6B00]">10K+</p>
                <p class="text-xs font-medium text-slate-500">Doğrulanmış uzman</p>
            </li>
            <li class="rounded-lg border border-orange-100 bg-white px-4 py-3.5 shadow-sm">
                <p class="text-xl font-black text-[#FF6B00]">81 İl</p>
                <p class="text-xs font-medium text-slate-500">Aktif hizmet ağı</p>
            </li>
            <li class="rounded-lg border border-orange-100 bg-white px-4 py-3.5 shadow-sm">
                <p class="text-xl font-black text-[#FF6B00]">%100</p>
                <p class="text-xs font-medium text-slate-500">Takip edilebilir süreç</p>
            </li>
        </ul>
    </div>

    <figure class="relative overflow-hidden rounded-xl border border-slate-300 bg-white p-3 shadow-sm">
        <div class="relative overflow-hidden rounded-lg">
            <img
                src="/images/home/responsive/mywerker_home_1100.webp"
                srcset="/images/home/responsive/mywerker_home_700.webp 700w, /images/home/responsive/mywerker_home_1100.webp 1100w, /images/home/mywerker_home_myerker.webp 2176w"
                sizes="(max-width: 1024px) 100vw, 50vw"
                alt="MyWerker ile ev tamiratı ve tadilat işlerinde çalışan onaylı usta"
                width="600"
                height="384"
                loading="eager"
                fetchpriority="high"
                class="h-[420px] w-full object-cover object-top"
            />
            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-900/85 via-slate-900/35 to-transparent p-6">
                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-orange-200">MyWerker Güvencesi</p>
                <p class="mt-1 text-lg font-bold text-white">Tek platformdan teklif, seçim ve yönetim</p>
            </div>
        </div>

        <figcaption class="pointer-events-none absolute left-7 top-7 rounded-md border border-slate-200 bg-white px-4 py-3">
            <p class="text-xs font-semibold text-slate-500">Aktif iş yönetimi</p>
            <p class="text-lg font-black text-slate-900">7/24</p>
        </figcaption>
    </figure>
</header>
