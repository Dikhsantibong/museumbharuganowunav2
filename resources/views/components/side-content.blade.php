<div class="col-lg-4">
    <!-- SIDEBAR WRAPPER -->
    <div class="sticky-top z-1" style="top: 90px;">
        <div class="mb-3">
            <h3>Berita Terbaru</h3>
            @forelse($beritaTerbaru as $data)
                <div class="row mb-3 align-items-start">
                    <div class="col-3">
                        <div class="img-responsive rounded-2 border img-responsive-1x1"
                            style="background-image: url({{ asset('storage/' . $data->thumbnail) }})">
                        </div>
                    </div>
                    <div class="col-9">
                        <a href="{{ route('berita.show', $data->slug) }}"
                            class="fw-semibold fs-4 d-block text-dark text-decoration-none" style="font-size: 14px;">
                            {{ Str::limit(strip_tags($data->judul), 125, '...') }}
                        </a>
                        <small class="text-muted">
                            {{ $data->created_at->format('d M Y') }}
                        </small>
                    </div>
                </div>
            @empty
                <p class="text-muted text-center">Belum ada berita</p>
            @endforelse
        </div>
        <div class="mb-3">
            <h3>Koleksi Terbaru</h3>
            @forelse($koleksiTerbaru as $data)
                <a href="/koleksi/{{ $data->id_koleksi }}" class="card card-link mx-0 mb-3">
                    <div class="ribbon bg-warning-lt">{{ $data->nama_koleksi }}</div>
                    <!-- Photo -->
                    <div class="img-responsive img-responsive-21x9 rounded-3"
                        style="background-image: url({{ $data->foto->first() ? asset('storage/' . $data->foto->first()->foto) : asset('img/image.png') }})">
                    </div>
                </a>
            @empty
                <p class="text-muted text-center">Belum ada koleksi</p>
            @endforelse
        </div>
    </div>
</div>
