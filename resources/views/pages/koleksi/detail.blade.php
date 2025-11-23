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

        <section id="gallery" class="gallery venue-2 section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        @if ($koleksi->foto->count() > 0)
                            @foreach ($koleksi->foto as $foto)
                                <div class="card rounded-4 mb-4">
                                    <div class="gallery-item h-100 rounded-4">
                                        <img src="{{ asset('storage/' . $foto->foto) }}" class="img-fluid" alt="">
                                        <div class="gallery-links d-flex align-items-center justify-content-center">
                                            <a href="{{ $foto->foto ? asset('storage/' . $foto->foto) : asset('assets/img/not-found/image.png') }}"
                                                title="{{ $foto->sumber }}" class="glightbox preview-link">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <img src="{{ asset('assets/img/not-found/image.png') }}" class="img-fluid rounded"
                                alt="">
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="venue-content">
                            <h3>{{ $koleksi->nama_koleksi }}</h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pb-3" style="width: 5cm">Tahun Pembuatan</td>
                                        <td class="pb-3" style="width: 0.4cm">:</td>
                                        <td class="pb-3">{{ $koleksi->tahun_pembuatan ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3">Tempat Perolehan</td>
                                        <td class="pb-3">:</td>
                                        <td class="pb-3">{{ $koleksi->tempat_perolehan ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3">Tanggal Masuk</td>
                                        <td class="pb-3">:</td>
                                        <td class="pb-3">
                                            {{ $koleksi->tanggal_masuk ? date('d M Y', strtotime($koleksi->tanggal_masuk)) : '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3">Cara Perolehan</td>
                                        <td class="pb-3">:</td>
                                        <td class="pb-3">{{ $koleksi->cara_perolehan ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3">Jenis Koleksi</td>
                                        <td class="pb-3">:</td>
                                        <td class="pb-3">{{ $koleksi->jenis_koleksi ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3">Uraian</td>
                                        <td class="pb-3">:</td>
                                    </tr>
                                    <tr>
                                        <td class="pb-3" colspan="3">
                                            {!! nl2br(e($koleksi->uraian)) !!}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
