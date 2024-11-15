<div class="border shadow rounded-md p-4 flex items-center justify-between">
    <div>
        <h4 class="text-sm font-medium">{{ $item['namaLatin'] }} ({{ $item['arti'] }})</h4>
        <p class="text-xs text-zinc-500">{{ $item['tempatTurun'] }} - {{ $item['jumlahAyat'] }} Ayat |

            @if (Auth::check())
                <a href="{{ $item['audioFull']['01'] }}">
                    Download
                </a>
            @else
                <a href="#" class="btn btn-primary disabled" onclick="alert('Login to download'); return false;"
                    title="Login to download">
                    Download
                </a>
            @endif
        </p>
    </div>

    <div>
        {{ $item['nama'] }}
    </div>
</div>
