@extends('layouts.app')

@section('content')
    <header class="img-bg"
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('{{ $koleksi->thumbnail ? asset('storage/' . $koleksi->thumbnail) : asset('/img/hero.png') }}') center/cover no-repeat; margin-top: -80px;">
        <div class="hero position-relative py-12 pb-7">
            <div class="container text-center">
                <h1 class="hero-title text-yellow mb-3" style="font-size: 3rem; font-weight: 700;">
                    Detail Kegiatan
                </h1>
                <p class="hero-description text-white text-opacity-75 mb-5" style="max-width: 700px; margin: auto;">
                    {{ $koleksi->judul }}
                </p>
            </div>
        </div>
    </header>
    <section class="section py-5">
        <div class="container">
            <div class="row gy-4">
                <!-- KONTEN BERITA -->
                <div class="col-lg-8">
                    <!-- Thumbnail -->
                    <div class="mb-4 border rounded-3">
                        <img class="img-fluid rounded-3"
                            src="{{ $koleksi->thumbnail ? asset('storage/' . $koleksi->thumbnail) : asset('assets/img/not-found/image.png') }}"
                            style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <!-- Judul -->
                    <h2 class="fw-bold mb-2">{{ $koleksi->judul }}</h2>
                    <!-- Meta -->
                    <div class="mb-4 text-muted small">
                        <b class="text-dark">Admin</b> |
                        <i class="bi bi-calendar-event"></i>
                        {{ $koleksi->tanggal_mulai ? $koleksi->tanggal_mulai : '-' }}
                        {{ $koleksi->tanggal_mulai ? ' - ' . $koleksi->tanggal_mulai : '' }}
                    </div>
                    <!-- Konten -->
                    <div class="content-berita fs-4 lh-lg">
                        {!! $koleksi->deskripsi !!}
                    </div>
                    <hr id="galeri">
                    <div class="row">
                        @foreach ($koleksi->fotos as $item)
                            <div class="col-md-4 col-6">
                                <a href="{{ asset('storage/' . $item->foto) }}" target="_blank" class="card card-link mx-0">
                                    <div class="position-relative">
                                        <div class="img-responsive img-responsive-1x1 rounded-3"
                                            style="background-image: url('{{ $item->foto ? asset('storage/' . $item->foto) : asset('assets/img/not-found/image.png') }}');">
                                        </div>
                                        @if ($item->caption)
                                            <div class="position-absolute bottom-0 start-0 w-100 px-3 rounded-bottom-3"
                                                style="background: rgba(0,0,0,0.45);">
                                                <span class="text-white d-block">
                                                    {{ $item->caption }}
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @include('components.side-content')
            </div>
        </div>
    </section>
@endsection
