{{-- {{ dd($item) }} --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __($item['title']) }}

            <a href="{{ route('home') }}" class="text-sm text-blue-500 font-base">Return Back</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid gap-y-12">
                    <div>


                        <h3 class="font-medium">{{ $item['title'] }}</h3>
                        <p class="flex items-center space-x-2">
                            <span class="font-medium">Download File:</span>
                            @if (Auth::check())
                                <a href="{{ $item['attachments'][0]['url'] }}" download
                                    onclick="gtag('event', 'click', {event_category: 'File', event_label: '{{ $item['type'] }}'})"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                </a>
                            @else
                                <a href="#"
                                    onclick="alert('Login to download'); gtag('event', 'click', {event_category: 'Disabled File', event_label: '{{ $item['type'] }}'}); return false;"
                                    title="Login to download" target="_blank">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4 text-zinc-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                </a>
                            @endif
                        </p>
                        <p><span class="font-medium">File Size:</span> <span
                                class="text-sm text-zinc-500">{{ $item['attachments'][0]['size'] }}</span></p>
                        <p><span class="font-medium">File Type:</span> <span
                                class="text-sm text-zinc-500">{{ $item['attachments'][0]['extension_type'] }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
