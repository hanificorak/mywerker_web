<section class="py-14" aria-labelledby="services-list-heading">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="mb-2 text-xs font-semibold uppercase tracking-[0.14em] text-[#FF6B00]">Hizmet Listesi</p>
                <h2 id="services-list-heading" class="text-3xl font-bold text-slate-900">Şehir Bazlı Popüler Hizmetler
                </h2>
                <p class="mt-2 max-w-2xl text-sm leading-7 text-slate-600">
                    Kullanıcıların en çok aradığı şehir ve hizmet kombinasyonlarını buradan inceleyebilirsiniz.
                    Her kutu tıklanabilir ve ilgili hizmet aramasına yönlendirir.
                </p>
            </div>
            <a href="{{ route('services') }}"
                class="inline-flex items-center gap-2 rounded-md border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-slate-400 hover:text-slate-900">
                Tüm Hizmetler
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <div id="services-list-grid" class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @forelse (($services ?? collect()) as $serviceItem)
                <a href="{{ route('services.show', ['service' => $serviceItem->slug]) }}"
                    class="group rounded-xl border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-orange-200 hover:shadow-md {{ $loop->index >= 20 ? 'hidden' : '' }}"
                    data-service-item
                    aria-label="{{ $serviceItem->title }} hizmet detayını görüntüle">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.12em] text-[#FF6B00]">
                        {{ strtoupper($serviceItem->city) }}</p>
                    <h3 class="mt-2 text-base font-semibold leading-6 text-slate-900">{{ $serviceItem->title }}</h3>
                    <p class="mt-2 line-clamp-3 text-sm leading-6 text-slate-600">{{ $serviceItem->description }}</p>
                    <span
                        class="mt-4 inline-flex items-center text-sm font-semibold text-slate-700 transition group-hover:text-[#FF6B00]">
                        Hizmete Git
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            @empty
                <div
                    class="rounded-xl border border-slate-200 bg-white p-6 text-sm text-slate-600 sm:col-span-2 lg:col-span-3 xl:col-span-4">
                    Henüz listelenecek hizmet bulunmuyor.
                </div>
            @endforelse
        </div>

        @if (($services ?? collect())->count() > 20)
            <div class="mt-8 flex justify-center">
                <button
                    id="services-list-toggle"
                    type="button"
                    class="inline-flex items-center gap-2 rounded-md border border-slate-300 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 transition hover:border-slate-400 hover:text-slate-900"
                >
                    Devamını Göster
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const toggleButton = document.getElementById('services-list-toggle');
                    const batchSize = 20;

                    if (!toggleButton) {
                        return;
                    }

                    toggleButton.addEventListener('click', function () {
                        const hiddenItems = Array.from(document.querySelectorAll('#services-list-grid [data-service-item].hidden'));

                        if (hiddenItems.length === 0) {
                            toggleButton.remove();
                            return;
                        }

                        hiddenItems.slice(0, batchSize).forEach(function (item) {
                            item.classList.remove('hidden');
                        });

                        const remainingHidden = document.querySelectorAll('#services-list-grid [data-service-item].hidden').length;

                        if (remainingHidden === 0) {
                            toggleButton.remove();
                        }
                    });
                });
            </script>
        @endif
    </div>
</section>
