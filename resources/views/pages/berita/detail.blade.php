@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/header/image.png') }});">
            <div class="container position-relative">
                <h1>Detail Berita</h1>
                <p>{{ $berita->judul }}</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li><a class="text-light" href="/blog">Blog</a></li>
                        <li class="current">{{ $berita->judul }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <div class="row gy-4">

                    <!-- KONTEN BERITA -->
                    <div class="col-lg-8">

                        <!-- Thumbnail -->
                        <div class="mb-4" style="max-height: 420px; overflow: hidden; border-radius: 16px;">
                            <img src="{{ $berita->thumbnail ? asset('storage/' . $berita->thumbnail) : asset('assets/img/not-found/image.png') }}"
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>

                        <!-- Judul -->
                        <h2 class="fw-bold mb-2">{{ $berita->judul }}</h2>

                        <!-- Meta -->
                        <div class="mb-4 text-muted small">
                            <b class="text-dark">Admin</b> |
                            <i class="bi bi-calendar-event"></i>
                            {{ $berita->tanggal_publikasi
                                ? \Carbon\Carbon::parse($berita->tanggal_publikasi)->translatedFormat('d F Y')
                                : '-' }}
                        </div>

                        <!-- Konten -->
                        <div class="content-berita fs-4 lh-lg">
                            {!! $berita->konten !!}

                        </div>

                        <hr id="komentar">
                        <!-- ================= KOMENTAR ================= -->
                        <h4 class="fw-semibold mb-2 mt-4">
                            Komentar ({{ $berita->komentar->count() }})
                        </h4>
                        <!-- FORM KOMENTAR -->
                        <form action="{{ route('komentar.store', $berita->id_berita) }}" method="POST" class="mb-4">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control rounded-3" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email (opsional)</label>
                                    <input type="email" name="email" class="form-control rounded-3">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Komentar</label>
                                <textarea name="komentar" rows="4" class="form-control rounded-3" required></textarea>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-yellow rounded-pill px-4">
                                    Kirim Komentar
                                </button>
                            </div>
                        </form>
                        <hr>
                        <!-- LIST KOMENTAR -->
                        @forelse ($berita->komentar as $komentar)
                            <div class="d-flex gap-3 mb-4">
                                <div>
                                    <div class="rounded-circle bg-warning text-white d-flex align-items-center justify-content-center"
                                        style="width:45px;height:45px;font-weight:bold;">
                                        {{ strtoupper(substr($komentar->nama, 0, 1)) }}
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <div class="bg-light rounded-4 p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <strong>{{ $komentar->nama }}</strong>
                                            <small class="text-muted">
                                                {{ $komentar->created_at->format('d M Y H:i') }}
                                            </small>
                                        </div>
                                        <p class="mb-0">{{ $komentar->komentar }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted">Belum ada komentar.</p>
                        @endforelse

                    </div>

                    <!-- SIDEBAR -->
                    <div class="col-lg-4">

                        <!-- SIDEBAR WRAPPER -->
                        <div class="sticky-top" style="top: 90px;">

                            <!-- BERITA TERBARU -->
                            <div class="card shadow-sm border-0 rounded-3 mb-4">
                                <div class="card-header bg-white border-0 pb-0">
                                    <h6 class="fw-bold mb-0 text-primary">
                                        📰 Berita Terbaru
                                    </h6>
                                    <hr class="mt-2 mb-2">
                                </div>
                                <div class="card-body pt-2">

                                    @forelse($beritaTerbaru as $berita)
                                        <div class="d-flex mb-3 align-items-start">
                                            <div class="me-2 flex-shrink-0">
                                                <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="thumb"
                                                    class="rounded" style="width:65px;height:60px;object-fit:cover;">
                                            </div>
                                            <div>
                                                <a href="{{ route('berita.show', $berita->slug) }}"
                                                    class="fw-semibold d-block text-dark text-decoration-none"
                                                    style="font-size: 14px;">
                                                    {{ $berita->judul }}
                                                </a>
                                                <small class="text-muted">
                                                    {{ $berita->created_at->format('d M Y') }}
                                                </small>
                                            </div>
                                        </div>
                                    @empty
                                        <p class="text-muted text-center">Belum ada berita</p>
                                    @endforelse

                                </div>
                            </div>

                            <!-- KEGIATAN TERAKHIR -->
                            {{-- <div class="card shadow-sm border-0 rounded-3">
                                <div class="card-header bg-white border-0 pb-0">
                                    <h6 class="fw-bold mb-0 text-success">
                                        📅 Kegiatan Terakhir
                                    </h6>
                                    <hr class="mt-2 mb-2">
                                </div>
                                <div class="card-body pt-2">

                                    @forelse($kegiatanTerakhir as $kegiatan)
                                        <div class="mb-3">
                                            <a href="{{ route('kegiatan.detail', $kegiatan->id_kegiatan) }}"
                                                class="fw-semibold text-decoration-none text-dark d-block">
                                                {{ $kegiatan->nama_kegiatan }}
                                            </a>
                                            <small class="text-muted d-flex align-items-center">
                                                <i class="bi bi-calendar-event me-1"></i>
                                                {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}
                                            </small>
                                        </div>
                                    @empty
                                        <p class="text-muted text-center">Belum ada kegiatan</p>
                                    @endforelse

                                </div>
                            </div> --}}

                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>
@endsection
