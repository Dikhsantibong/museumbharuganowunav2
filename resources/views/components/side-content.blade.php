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
            <hr class="my-3">
            <h3>Kegiatan </h3>
            @forelse($kegiatanTerakhir as $data)
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
                            {{ $data->tanggal_mulai }}
                        </small>
                    </div>
                </div>
            @empty
                <p class="text-muted text-center">Belum ada berita</p>
            @endforelse
        </div>
        <div class="mb-3">
            <hr class="my-3">
            <h3>Koleksi Terbaru</h3>
            <div class="row g-2">
                @forelse($koleksiTerbaru as $data)
                    <div class="col-6">
                        <a href="/koleksi/{{ $data->id_koleksi }}" class="card card-link mx-0">
                            <div class="position-relative">
                                <div class="img-responsive img-responsive-1x1 rounded-3"
                                    style="background-image: url('{{ $data->foto->first() ? asset('storage/' . $data->foto->first()->foto) : asset('img/image.png') }}');">
                                </div>
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 rounded-bottom-3"
                                    style="background: rgba(0,0,0,0.45);">
                                    <span class="text-white d-block">
                                        {{ $data->nama_koleksi }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p class="text-muted text-center">Belum ada koleksi</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
