@extends('layouts.app')

@section('content')
<section class="content-section" data-background="#fffbf7">
    <div class="container">
        <!-- Judul Halaman Berita -->
        <div class="row justify-content-left mb-5">
            <div class="col-lg-8">
                <div class="text-box">
                    <h3>HALAMAN BERITA</h3>
                </div>
            </div>
        </div>
        
        <!-- Daftar Berita -->
        <div class="row">
            @forelse($berita as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @php
                            $thumb = $item->thumbnail;
                        @endphp
                        @if($thumb)
                            <img src="{{ asset('storage/' . $thumb) }}" class="card-img-top" alt="{{ $item->judul }}">
                        @else
                            <img src="https://via.placeholder.com/400x250?text=No+Image" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $item->judul }}
                            </h5>
                            <div class="mb-2">
                                <span class="badge bg-secondary">{{ optional($item->kategori)->nama_kategori ?? '-' }}</span>
                                <span class="text-muted small ms-2">
                                    {{ \Carbon\Carbon::parse($item->tanggal_publikasi ?: $item->created_at)->translatedFormat('d F Y') }}
                                </span>
                                <span class="text-muted small ms-2">
                                    <i class="far fa-comments"></i>
                                    {{ $item->komentar->count() }} Komentar
                                </span>
                            </div>
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->konten), 140) }}
                            </p>
                        </div>
                        <!-- card-footer opsional: link baca detail, dsb. -->
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Tidak ada berita yang tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection