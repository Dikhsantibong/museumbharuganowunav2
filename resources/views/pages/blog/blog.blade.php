@extends('layouts.app')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/header/image.png') }});">
            <div class="container position-relative">
                <h1>Blog</h1>
                <p>Berita terkini seputar Museum</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li class="current">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>

        <section id="speakers" class="speakers section">

            <div class="container">

                <div class="speakers-list">
                    <div class="row">
                        <div class="col-lg-9">
                            @foreach ($berita as $data)
                                <div class="col-lg-12 speaker-entry">
                                    <div class="speaker-profile rounded-5">
                                        <div class="row">
                                            <div class="col-3">
                                                <div
                                                    style="width: 100%; aspect-ratio: 1/1; overflow: hidden; border-radius: 12px;">
                                                    <img src="{{ $data->thumbnail ? asset('storage/' . $data->thumbnail) : asset('assets/img/not-found/image.png') }}"
                                                        style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
                                                        class="img-thumbnail p-0 border-0" alt="thumbnail">
                                                </div>
                                            </div>

                                            <div class="col-9">
                                                <a href="/blog/{{ $data->slug }}">
                                                    <h4>{{ $data->judul }}</h4>
                                                </a>

                                                <div class="speaker-details">
                                                    {{-- konten singkat (biar tidak kepanjangan) --}}
                                                    <p class="speaker-summary">
                                                        {{ Str::limit(strip_tags($data->konten), 150, '...') }}
                                                    </p>
                                                    {{-- Jika mau: tanggal publish --}}
                                                    <small class="text-muted">
                                                        Dipublikasikan: {{ $data->tanggal_publikasi ?? '-' }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-lg-3">
                            tes
                        </div>

                    </div>

                </div>

            </div>

        </section>
    </main>
@endsection
