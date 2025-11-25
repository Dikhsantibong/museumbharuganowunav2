@extends('layouts.app')

@section('content')
    <header class="img-bg"
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('{{ $berita->thumbnail ? asset('storage/' . $berita->thumbnail) : asset('/img/hero.png') }}') center/cover no-repeat; margin-top: -80px;">
        <div class="hero position-relative py-12 pb-7">
            <div class="container text-center">
                <h1 class="hero-title text-yellow mb-3" style="font-size: 3rem; font-weight: 700;">
                    Detail Berita
                </h1>
                <p class="hero-description text-white text-opacity-75 mb-5" style="max-width: 700px; margin: auto;">
                    {{ $berita->judul }}
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
                            src="{{ $berita->thumbnail ? asset('storage/' . $berita->thumbnail) : asset('assets/img/not-found/image.png') }}"
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
                    <h3 class="mb-3 mt-4">
                        Komentar ({{ $berita->komentar->count() }})
                    </h3>
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
                            <button type="submit" class="btn btn-yellow rounded-3 px-4">
                                Kirim Komentar
                            </button>
                        </div>
                    </form>
                    <hr>
                    <!-- LIST KOMENTAR -->
                    @forelse ($berita->komentar as $komentar)
                        <div class="d-flex gap-3 mb-4">
                            <div>
                                <div class="rounded-circle bg-yellow-lt text-white d-flex align-items-center justify-content-center"
                                    style="width:45px;height:45px;font-weight:bold;">
                                    {{ strtoupper(substr($komentar->nama, 0, 1)) }}
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="bg-light rounded-3 p-3">
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
                @include('components.side-content')
            </div>
        </div>
    </section>
@endsection
