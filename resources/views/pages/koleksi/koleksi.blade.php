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
        </div><!-- End Page Title -->
        <section id="gallery" class="gallery section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row g-3 justify-content-center">
                            @foreach ($koleksi as $data)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card rounded-4">
                                        <div class="gallery-item h-100 rounded-bottom-0 rounded-top-4">
                                            <img src="{{ $data->foto->first() ? asset('storage/' . $data->foto->first()->foto) : asset('no-image.jpg') }}"
                                                class="img-fluid" alt="">
                                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                                <a href="{{ $data->foto->first() ? asset('storage/' . $data->foto->first()->foto) : asset('no-image.jpg') }}"
                                                    title="{{ $data->nama_koleksi }}" class="glightbox preview-link"><i
                                                        class="bi bi-arrows-angle-expand"></i></a>
                                                <a href="gallery-single.html" class="details-link"><i
                                                        class="bi bi-link-45deg"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $data->nama_koleksi }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-4">tes2</div>
                </div>
            </div>
        </section>

    </main>
@endsection
