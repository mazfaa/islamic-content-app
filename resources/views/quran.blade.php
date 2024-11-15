<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Qur\'an') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-3 gap-8">
                    @foreach ($qurans['data'] as $quran)
                        {{-- {{ dd($quran) }} --}}
                        <x-quran-card :item="$quran"></x-quran-card>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script type="module">
        $(document).ready(function() {
            console.log('jQuery is working')
        });
    </script>
</x-app-layout>
