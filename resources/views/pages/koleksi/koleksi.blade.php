@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(assets/img/header/image.png);">
            <div class="container position-relative">
                <h1>Koleksi</h1>
                <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                    molestias.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li class="current">Koleksi</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->

        <section id="gallery" class="gallery section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        @php
                            $columns = 3;
                            $total = count($koleksi);
                            $rows = ceil($total / $columns);
                        @endphp

                        <div class="row g-3 justify-content-center">

                            @for ($col = 0; $col < $columns; $col++)
                                <div class="col-lg-4 col-md-4">

                                    @for ($row = 0; $row < $rows; $row++)
                                        @php
                                            $index = $col * $rows + $row;
                                            if ($index >= $total) {
                                                break;
                                            }
                                            $data = $koleksi[$index];
                                        @endphp

                                        <div class="card rounded-4 mb-4">
                                            <div class="gallery-item h-100 rounded-bottom-0 rounded-top-4">
                                                <img src="{{ $data->foto->first()
                                                    ? asset('storage/' . $data->foto->first()->foto)
                                                    : asset('assets/img/not-found/image.png') }}"
                                                    class="img-fluid" alt="">

                                                <div class="gallery-links d-flex align-items-center justify-content-center">
                                                    <a href="{{ $data->foto->first()
                                                        ? asset('storage/' . $data->foto->first()->foto)
                                                        : asset('assets/img/not-found/image.png') }}"
                                                        title="{{ $data->nama_koleksi }}" class="glightbox preview-link">
                                                        <i class="bi bi-arrows-angle-expand"></i>
                                                    </a>

                                                    <a href="/koleksi/{{ $data->id_koleksi }}" class="details-link">
                                                        <i class="bi bi-link-45deg"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <a href="/koleksi/{{ $data->id_koleksi }}" class="card-body">
                                                {{ $data->nama_koleksi }}
                                            </a>
                                        </div>
                                    @endfor

                                </div>
                            @endfor

                        </div>
                    </div>

                    <!-- SAMPING KANAN -->
                    <div class="col-lg-4">
                        tes2
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
