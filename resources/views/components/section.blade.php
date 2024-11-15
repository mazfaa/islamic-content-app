<div class="container">
    <h1 class="font-semibold mb-4">{{ $title }}</h1>

    <div class="cards grid grid-cols-4 gap-6">
        @foreach ($items as $item)
            <x-card :item="$item"></x-card>
        @endforeach
    </div>
</div>
