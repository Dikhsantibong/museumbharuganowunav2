@extends('layouts.app')

@section('content')
    <header class="img-bg"
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('{{ $koleksi->foto->first() ? asset('storage/' . $koleksi->foto->first()->foto) : asset('img/image.png') }}') center/cover no-repeat; margin-top: -80px;">
        <div class="hero position-relative py-12 pb-7">
            <div class="container text-center">
                <h1 class="hero-title text-yellow mb-3" style="font-size: 3rem; font-weight: 700;">
                    Detail Koleksi
                </h1>
                <p class="hero-description text-white text-opacity-75 mb-5" style="max-width: 700px; margin: auto;">
                    {{ $koleksi->nama_koleksi }}
                </p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row g-3">
                        <h1 class="mb-2">{{ $koleksi->nama_koleksi }}</h1>
                        @if ($koleksi->foto->count() > 0)
                            <div class="col-lg-4">
                                @if ($koleksi->foto->count() > 0)
                                    @foreach ($koleksi->foto as $foto)
                                        <div class="card rounded-3 mb-3">
                                            <img src="{{ asset('storage/' . $foto->foto) }}" class="img-fluid rounded-3"
                                                alt="">
                                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                                <a href="{{ $foto->foto ? asset('storage/' . $foto->foto) : asset('assets/img/not-found/image.png') }}"
                                                    title="{{ $foto->sumber }}" class="glightbox preview-link">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <img src="{{ asset('img/image.png') }}" class="img-fluid rounded"
                                        alt="">
                                @endif
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tahun Pembuatan</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->tahun_pembuatan ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tempat Perolehan</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->tempat_perolehan ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Masuk</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->tanggal_masuk ? date('d M Y', strtotime($koleksi->tanggal_masuk)) : '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Cara Perolehan</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->cara_perolehan ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Jenis Koleksi</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->jenis_koleksi ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Uraian</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->uraian ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tahun Pembuatan</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->tahun_pembuatan ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tempat Perolehan</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->tempat_perolehan ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Masuk</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->tanggal_masuk ? date('d M Y', strtotime($koleksi->tanggal_masuk)) : '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Cara Perolehan</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->cara_perolehan ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Jenis Koleksi</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->jenis_koleksi ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Uraian</label>
                                            <div class="card">
                                                <div class="card-body fs-4 rounded-3 py-2 px-3">
                                                    {{ $koleksi->uraian ?? '-' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                @include('components.side-content')
            </div>
        </div>
    </section>
@endsection
