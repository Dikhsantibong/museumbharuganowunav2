@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(/assets/img/header/image.png);">
            <div class="container position-relative">
                <h1>{{ $koleksi->nama_koleksi }}</h1>
                <p>Detail informasi koleksi museum</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/koleksi" class="text-light">Koleksi</a></li>
                        <li class="current">{{ $koleksi->nama_koleksi }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="container">

                <div class="row gy-4">

                    <!-- BAGIAN KIRI GAMBAR -->
                    <div class="col-lg-7">

                        @if ($koleksi->foto->count() > 0)
                            <div class="row g-3">

                                @foreach ($koleksi->foto as $foto)
                                    <div class="col-6">
                                        <div class="card">
                                            <img src="{{ asset('storage/' . $foto->foto) }}" class="img-fluid rounded"
                                                alt="Foto Koleksi">

                                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                                <a href="{{ asset('storage/' . $foto->foto) }}"
                                                    class="glightbox preview-link" title="{{ $koleksi->nama_koleksi }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        @else
                            <img src="{{ asset('assets/img/not-found/image.png') }}" class="img-fluid rounded"
                                alt="">
                        @endif

                    </div>
                    <!-- END BAGIAN KIRI -->

                    <!-- BAGIAN KANAN DETAIL -->
                    <div class="col-lg-5">

                        <div class="card p-4 rounded-4">
                            <h3 class="mb-3">{{ $koleksi->nama_koleksi }}</h3>

                            <table class="table table-borderless">
                                <tr>
                                    <th width="160">Tahun Pembuatan</th>
                                    <td>{{ $koleksi->tahun_pembuatan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Perolehan</th>
                                    <td>{{ $koleksi->tempat_perolehan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Masuk</th>
                                    <td>{{ $koleksi->tanggal_masuk ? date('d M Y', strtotime($koleksi->tanggal_masuk)) : '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cara Perolehan</th>
                                    <td>{{ $koleksi->cara_perolehan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Koleksi</th>
                                    <td>{{ $koleksi->jenis_koleksi ?? '-' }}</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <!-- END BAGIAN KANAN -->

                </div>

                <!-- URAIAN -->
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="card p-4 rounded-4">
                            <h4>Uraian Koleksi</h4>
                            <p class="mt-2">
                                {!! nl2br(e($koleksi->uraian)) !!}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection
