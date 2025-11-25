<div class="col-lg-4">
    <!-- SIDEBAR WRAPPER -->
    <div class="sticky-top z-1" style="top: 90px;">
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
</div>
