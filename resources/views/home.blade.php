<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Islamic Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid gap-y-12">
                    <x-section title="Books" :items="$books['data']"></x-section>
                    <x-section title="Articles" :items="$articles['data']"></x-section>
                    <x-section title="News" :items="$news['data']"></x-section>
                    <x-section title="Posters" :items="$posters['data']"></x-section>
                </div>
            </div>
        </div>
    </div>

    <x-slot:scripts>
        <script>
            gtag('event', 'page_view', {
                page_title: 'Konten Islami',
                page_path: '/konten-islami'
            });
        </script>
    </x-slot:scripts>
</x-app-layout>
