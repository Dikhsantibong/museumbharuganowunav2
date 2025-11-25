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
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('/img/hero2.png') center/cover no-repeat; margin-top: -80px;">
        <div class="hero position-relative py-12 pb-9">
            <div class="container text-center">

                <h1 class="hero-title text-yellow mb-3" style="font-size: 3rem; font-weight: 700;">
                    Kegiatan Museum
                </h1>

                <p class="hero-description text-white text-opacity-75 mb-5" style="max-width: 700px; margin: auto;">
                    Informasi berbagai kegiatan, event budaya, pameran, workshop, serta program edukatif yang
                    diselenggarakan oleh Museum Bharugano Wuna.
                </p>
                <!-- Search Bar (opsional) -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <form class="row g-3 justify-content-center" method="GET" action="{{ route('kegiatan.index') }}">
                            <div class="col-9">
                                <input type="text" name="search" placeholder="Cari kegiatan..."
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
                                <a href="/kegiatan" class="ms-3 align-items-center text-muted">
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
                    @foreach ($kegiatan as $data)
                        <a href="/kegiatan/{{ $data->slug }}" class="berita-link text-dark border-0 rounded-3">
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
                                            {{ $data->tanggal_mulai ? $data->tanggal_mulai : '-' }}
                                            {{ $data->tanggal_mulai ? ' - ' . $data->tanggal_mulai : '' }}
                                        </small>
                                    </div>
                                    <small class="text-muted mb-0">
                                        {{ Str::limit(strip_tags($data->deskripsi), 150, '...') }}
                                    </small>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    @if ($kegiatan->lastPage() > 1)
                        <hr class="my-3">
                        <div class="d-flex justify-content-center">
                            <ul class="pagination">

                                {{-- PREVIOUS --}}
                                <li class="page-item {{ $kegiatan->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $kegiatan->previousPageUrl() }}">&lt;</a>
                                </li>

                                @php
                                    $currentPage = $kegiatan->currentPage();
                                    $lastPage = $kegiatan->lastPage();

                                    $start = max(1, $currentPage - 2);
                                    $end = min($lastPage, $currentPage + 2);
                                @endphp

                                @for ($page = $start; $page <= $end; $page++)
                                    <li class="page-item {{ $currentPage == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $kegiatan->url($page) }}">
                                            {{ $page }}
                                        </a>
                                    </li>
                                @endfor

                                {{-- NEXT --}}
                                <li class="page-item {{ $kegiatan->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $kegiatan->nextPageUrl() }}">&gt;</a>
                                </li>

                            </ul>
                        </div>
                    @endif
                </div>
                @include('components.side-content')
            </div>
        </div>
    </section>
@endsection
