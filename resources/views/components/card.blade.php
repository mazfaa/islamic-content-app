{{-- {{ dd($item) }} --}}
<div class="border shadow-md rounded-md">
    <img src="{{ $item['image'] ?? 'https://dummyimage.com/150x150/cccccc/000000&text=No+Image' }}"
        alt="{{ strlen($item['title']) > 25 ? ucwords(strtolower(substr($item['title'], 0, 30))) . ' ...' : ucwords(strtolower($item['title'])) }}"
        class="w-full h-[150px] object-cover mb-1" />

    <div class="card-content px-4 py-2">
        <h2 class="font-medium text-sm">
            {{ strlen($item['title']) > 25 ? ucwords(strtolower(substr($item['title'], 0, 30))) . ' ...' : ucwords(strtolower($item['title'])) }}
        </h2>

        <p class="text-zinc-500 text-xs">
            {{ strlen($item['description']) > 25 ? ucwords(strtolower(substr($item['description'], 0, 30))) . ' ...' : ucwords(strtolower($item['description'])) }}
        </p>

        <div class="flex items-center justify-between mt-2">
            <a href="{{ route('islamic-content.show', $item['id']) }}" class="text-xs text-blue-500"
                target="_blank">View</a>
        </div>
    </div>
</div>
