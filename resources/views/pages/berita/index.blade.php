@extends('layouts.app')

@section('content')
    <style>
        .berita-link {
            text-decoration: none !important;
        }

        .berita-link:hover {
            text-decoration: none !important;
        }
    </style>
    <header class="img-bg"
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('/img/hero.png') center/cover no-repeat; margin-top: -80px;">
        <div class="hero position-relative py-12 pb-9">
            <div class="container text-center">

                <h1 class="hero-title text-yellow mb-3" style="font-size: 3rem; font-weight: 700;">
                    Berita Terbaru
                </h1>

                <p class="hero-description text-white text-opacity-75 mb-5" style="max-width: 700px; margin: auto;">
                    Update informasi terkini seputar Museum Bharugano Wuna, kegiatan budaya, event, dan informasi penting
                    lainnya.
                </p>
                <!-- Search Bar (opsional) -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <form class="row g-3 justify-content-center" method="GET" action="{{ route('berita.index') }}">
                            <div class="col-9">
                                <input type="text" name="search" placeholder="Cari berita..."
                                    value="{{ request('search') }}" class="form-control form-control-solid">
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-yellow w-100 fw-bold">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section py-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    @if (request('search'))
                        <style>
                            .search-result {
                                display: inline-block;
                                /* Biar width mengikuti isi */
                                background: #fff;
                            }
                        </style>
                        <div class="mb-4">
                            <div class="search-result border rounded-3 px-3 py-2 text-muted">
                                Hasil Pencarian : {{ request('search') }}
                                <a href="/berita" class="ms-3 align-items-center text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon m-1">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M18 6l-12 12" />
                                        <path d="M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    @endif
                    @foreach ($berita as $data)
                        <a href="/berita/{{ $data->slug }}" class="berita-link text-dark border-0 rounded-3">
                            <div class="row mb-3">
                                <div class="col-md-2 col-3">
                                    <div class="border"
                                        style="width: 100%; aspect-ratio: 1/1; overflow: hidden; border-radius: 12px;">
                                        <img src="{{ $data->thumbnail ? asset('storage/' . $data->thumbnail) : asset('assets/img/not-found/image.png') }}"
                                            style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
                                            class="img-thumbnail p-0 border-0" alt="thumbnail">
                                    </div>
                                </div>

                                <div class="col-md-10 col-9">
                                    <h3 class="mb-1"> {{ Str::limit(strip_tags($data->judul), 200, '...') }}</h3>
                                    <div class="d-flex">
                                        <small class="text-muted small mb-0">
                                            <b class="text-dark">Admin</b> |
                                            {{ $data->tanggal_publikasi ? \Carbon\Carbon::parse($data->tanggal_publikasi)->translatedFormat('d F Y') : '-' }}
                                        </small>
                                    </div>
                                    <small class="text-muted mb-0">
                                        {{ Str::limit(strip_tags($data->konten), 150, '...') }}
                                    </small>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
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
                                        class="fw-semibold fs-4 d-block text-dark text-decoration-none"
                                        style="font-size: 14px;">
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
            </div>
        </div>
    </section>
@endsection
