<div>
    <h3 class="text-lg font-bold mb-2">Komentar Berita</h3>

    @php
        $beritaId = $this->record->id_berita ?? null;
        $komentars = \App\Models\KomentarBerita::where('id_berita', $beritaId)->latest()->get();
    @endphp

    @if ($komentars->isEmpty())
        <p class="text-gray-500">Belum ada komentar.</p>
    @endif

    @foreach ($komentars as $komen)
        <div class="border p-2 rounded mb-2">
            <strong>{{ $komen->nama }}</strong>
            <small class="text-gray-500">{{ $komen->created_at->diffForHumans() }}</small>
            <p>{{ $komen->komentar }}</p>
        </div>
    @endforeach
</div>
