@extends('layouts.app')

@section('content')
<style>
.koleksi-thumb-list {
    width: 100%;
    max-width: 420px;
    height: 210px;
    object-fit: cover;
    border-radius: 6px;
    background:#fcfcfc;
}
</style>
<section class="content-section" data-background="#fffbf7">
    <div class="container">
        <div class="row">
            <!-- KOLEKSI UTAMA -->
            <div class="col-lg-8">
                <div class="text-box mb-4">
                    <h5 class="mb-4">HALAMAN KOLEKSI</h5>
                </div>
                <div class="row">
                    @forelse($koleksi as $item)
                        <div class="col-md-6 mb-4">
                            <div class="collection-box card h-100 shadow-sm">
                                @php $foto = optional($item->foto->first())->foto; @endphp
                                <a href="{{ url('koleksi/'.$item->id_koleksi) }}">
                                @if($foto)
                                    <img src="{{ asset('storage/' . $foto) }}" class="koleksi-thumb-list" alt="{{ $item->nama_koleksi }}">
                                @else
                                    <img src="https://via.placeholder.com/400x210?text=No+Image" class="koleksi-thumb-list" alt="No Image">
                                @endif
                                </a>
                                <div class="card-body">
                                    <a href="{{ url('koleksi/'.$item->id_koleksi) }}" style="font-weight:bold; color:#080808; font-family: 'Cinzel', serif; font-size: 1.15rem; text-decoration:none;">
                                    {{ $item->nama_koleksi }}
                                    </a>
                                    <ul class="list-unstyled mt-2 mb-0" style="font-size:.95rem;">
                                        @if($item->tahun_pembuatan)<li><b>Tahun:</b> {{ $item->tahun_pembuatan }}</li>@endif
                                        @if($item->jenis_koleksi)<li><b>Jenis:</b> {{ $item->jenis_koleksi }}</li>@endif
                                        @if($item->tempat_perolehan)<li><b>Asal:</b> {{ $item->tempat_perolehan }}</li>@endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="text-center">Tidak ada koleksi yang tersedia.</p>
                        </div>
                    @endforelse
                </div>
            </div>
            <!-- SIDEBAR BERITA POPULER (tetap sama) -->
            <div class="col-lg-4">
                <aside class="sidebar">
                    <div class="widget">
                        <div class="widget-title">Berita Populer</div>
                        <div class="d-flex flex-column gap-2">
                        @forelse($berita_populer as $pop)
                            <div class="d-flex flex-row align-items-center mb-2" style="border-bottom:1px solid #eee; padding-bottom:12px;">
                                <div style="width:72px; min-width:72px; height:58px; overflow:hidden; border-radius:6px; background:#f6f6f6; display:flex; align-items:center; justify-content:center;">
                                    @if($pop->thumbnail)
                                        <img src="{{ asset('storage/' . $pop->thumbnail) }}" alt="{{ $pop->judul }}" style="max-width: 100%; max-height: 100%; object-fit:cover">
                                    @else
                                        <img src="https://via.placeholder.com/72x58?text=No+Img" alt="No Image">
                                    @endif
                                </div>
                                <div class="ms-3 flex-fill">
                                    <a href="#" style="font-weight:600; color:#080808; text-decoration:none; font-family: 'Cinzel', serif;">
                                        {{ $pop->judul }}
                                    </a>
                                    <div class="small text-muted mt-1" style="font-size: 0.93em;">
                                        <i class="far fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($pop->tanggal_publikasi ?: $pop->created_at)->translatedFormat('d M Y') }}<br>
                                        <i class="far fa-comments"></i> {{ $pop->komentar_count ?? 0 }} Komentar
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted">Belum ada berita populer.</p>
                        @endforelse
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection