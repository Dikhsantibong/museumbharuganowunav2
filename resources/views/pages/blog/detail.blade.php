@extends('layouts.app')

@section('content')
    <style>
        .content-berita p {
            margin-bottom: 1rem;
        }

        .content-berita img {
            max-width: 100%;
            border-radius: 12px;
            margin: 10px 0;
        }
    </style>
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
                            <i class="bi bi-calendar-event"></i>
                            {{ $berita->tanggal_publikasi
                                ? \Carbon\Carbon::parse($berita->tanggal_publikasi)->translatedFormat('d F Y')
                                : '-' }}
                        </div>

                        <!-- Konten -->
                        <div class="content-berita fs-6 lh-lg">
                            {!! $berita->konten !!}

                        </div>
                        <hr>
                        <!-- ================= KOMENTAR ================= -->
                        <h5 class="fw-semibold mb-2 mt-4">
                            Komentar ({{ $berita->komentar->count() }})
                        </h5>

                        @if (session('success'))
                            <div class="alert alert-success rounded-3">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- FORM KOMENTAR -->
                        <form action="{{ route('komentar.store', $berita->id_berita) }}" method="POST" class="mb-4">
                            @csrf

                            <div class="row">
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
                                <button type="submit" class="btn btn-primary rounded-pill px-4">
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

                        <div class="card border-0 shadow-sm rounded-4 p-4">

                            <h5 class="fw-semibold mb-3">📰 Berita Lainnya</h5>

                            @forelse ($beritaLainnya ?? [] as $item)
                                <div class="mb-3 border-bottom pb-2">
                                    <a href="/blog/{{ $item->slug }}" class="text-decoration-none">
                                        <strong class="d-block">{{ Str::limit($item->judul, 50) }}</strong>
                                    </a>
                                    <small class="text-muted">
                                        {{ $item->tanggal_publikasi ? \Carbon\Carbon::parse($item->tanggal_publikasi)->format('d M Y') : '' }}
                                    </small>
                                </div>
                            @empty
                                <p class="text-muted">Belum ada berita lainnya.</p>
                            @endforelse

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
