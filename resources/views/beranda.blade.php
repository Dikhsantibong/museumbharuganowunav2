@extends('layouts.app')

@section('content')
    <header class="hero d-flex align-items-center"
        style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.6)), url('/img/hero2.png') center/cover no-repeat; height: 100vh; margin-top: -80px;">
        <div class="container ">
            <div class="text-center text-white">
                <div class="hero-subheader text-light">Museum & Warisan Budaya</div>
                <h1 class="hero-title">
                    Museum Bharugano Wuna<br />
                    <span class="text-yellow" id="typed">Jejak Sejarah Tanah Muna</span>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var typed = new Typed('#typed', {
                                strings: [
                                    'Jejak Sejarah Tanah Muna',
                                    'Pusat Edukasi Budaya',
                                    'Pesona Peradaban Leluhur'
                                ],
                                typeSpeed: 90,
                                backSpeed: 40,
                                backDelay: 1200,
                                startDelay: 800,
                                loop: true
                            });
                        });
                    </script>
                </h1>

                <p class="hero-description text-light mt-4">
                    Jelajahi kekayaan sejarah, artefak bersejarah, dan nilai budaya masyarakat Muna
                    dalam satu ruang edukatif yang modern, informatif, dan inspiratif.
                </p>

                <div class="mt-6 mt-lg-7">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a href="#tentang" class="btn btn-lg btn-yellow">
                                Jelajahi Museum
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="/koleksi" class="btn btn-lg btn-outline-light">
                                Lihat Koleksi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section section-light py-5 mt-4 pt-4">
        <svg class="section-divider" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none">
            <path class="wave-1" d="M-110 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </path>
            <path class="wave-2" d="M-110 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </path>
            <path class="wave-3" d="M-110 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </path>
        </svg>
        <div class="container">
            <div class="section-header mb-5">
                <h2 class="section-title">Eksplor Museum Bharugano Wuna</h2>
                <p class="text-muted">Nikmati pengalaman digital interaktif museum kami</p>
            </div>
            <div class="row text-center">
                <div class="col-6 col-md-3 p-0">
                    <a href="#" class="card card-link card-link-pop bg-transparent rounded-0 py-3">
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-md">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                            </svg><br>
                            <h3 class="mb-1">Video Profil</h3>
                            <p class="text-muted">
                                Tonton Video
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 p-0">
                    <a href="#" class="card card-link card-link-pop bg-transparent rounded-0 py-3">
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-md">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 7c1.143 0 2.235 .035 3.275 .104c1.017 .068 1.95 .207 2.798 .42c.813 .203 1.52 .505 2.119 .909a3.903 3.903 0 0 1 1.328 1.531c.326 .657 .48 1.48 .48 2.466c0 1.006 -.189 1.91 -.574 2.707c-.375 .779 -.886 1.396 -1.537 1.848a3.696 3.696 0 0 1 -2.16 .66c-.509 0 -.97 -.068 -1.382 -.21a5.84 5.84 0 0 1 -1.17 -.548a18.45 18.45 0 0 1 -1.045 -.695a9.104 9.104 0 0 0 -1.001 -.63a2.376 2.376 0 0 0 -1.13 -.301c-.373 0 -.75 .097 -1.132 .3c-.316 .17 -.65 .38 -1 .63c-.322 .23 -.67 .462 -1.047 .695a5.78 5.78 0 0 1 -1.168 .548c-.413 .142 -.872 .21 -1.378 .21a3.706 3.706 0 0 1 -2.165 -.659c-.651 -.452 -1.162 -1.07 -1.537 -1.848c-.385 -.798 -.574 -1.7 -.574 -2.709c-.004 -.98 .15 -1.802 .477 -2.46a3.897 3.897 0 0 1 1.33 -1.531c.6 -.403 1.307 -.704 2.12 -.907a16.088 16.088 0 0 1 2.8 -.423c1.04 -.071 2.13 -.107 3.273 -.107z" />
                            </svg><br>
                            <h3 class="mb-1">Virtual Tour</h3>
                            <p class="text-muted">
                                Coba Sekarang
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 p-0">
                    <a href="#" class="card card-link card-link-pop bg-transparent rounded-0 py-3">
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-md">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 5h3.5a5 5 0 0 1 0 10h-5.5l-4.015 4.227a2.3 2.3 0 0 1 -3.923 -2.035l1.634 -8.173a5 5 0 0 1 4.904 -4.019h3.4z" />
                                <path d="M14 15l4.07 4.284a2.3 2.3 0 0 0 3.925 -2.023l-1.6 -8.232" />
                                <path d="M8 9v2" />
                                <path d="M7 10h2" />
                                <path d="M14 10h2" />
                            </svg><br>
                            <h3 class="mb-1">Game Roblox</h3>
                            <p class="text-muted">
                                Mainkan Game
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 p-0">
                    <a href="#" class="card card-link card-link-pop bg-transparent rounded-0 py-3">
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-md">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M15 21h-9a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v7" />
                                <path d="M19 22v.01" />
                                <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
                                <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                            </svg><br>
                            <h3 class="mb-1">Quiz</h3>
                            <p class="text-muted">
                                Mulai Quiz
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <section class="section border-top py-5">
        <div class="container">
            <div class="section-header mb-5">
                <h2 class="section-title">Waktu Kunjungan Museum</h2>
                <div class="section-description">
                    Informasi jam operasional Museum Bharugano Wuna untuk memudahkan pengunjung merencanakan
                    kunjungan.
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <img src="{{ asset('img/image.png') }}" alt="Waktu Kunjungan Museum" class="img-fluid rounded-3">
                </div>
                <div class="col-lg-6">
                    <div class="space-y-6">
                        <div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="shape shape-lg bg-blue-lt">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-lg">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                            <path d="M16 3l0 4" />
                                            <path d="M8 3l0 4" />
                                            <path d="M4 11l16 0" />
                                            <path d="M8 15h2v2h-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="h2 mb-2">Hari Operasional</h3>
                                    <p class="text-muted m-0">
                                        Museum Bharugano Wuna buka setiap <strong>Senin - Sabtu</strong> dan tutup
                                        pada
                                        hari
                                        Minggu
                                        serta hari libur nasional.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="shape shape-lg bg-green-lt">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-lg icons-tabler-outline icon-tabler-clock">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 7v5l3 3" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="h2 mb-2">Jam Buka</h3>
                                    <p class="text-muted m-0">
                                        Pukul <strong>08.00 - 16.00 WITA</strong>. Pengunjung disarankan datang
                                        paling
                                        lambat
                                        1 jam sebelum jam tutup.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="shape shape-lg bg-orange-lt">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-lg icons-tabler-outline icon-tabler-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="col">
                                    <h3 class="h2 mb-2">Waktu Terbaik Berkunjung</h3>
                                    <p class="text-muted m-0">
                                        Waktu terbaik untuk berkunjung adalah pada pagi hari agar dapat menikmati
                                        seluruh
                                        koleksi
                                        museum dengan lebih nyaman dan tenang.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section py-5 section-light border-top">
        <div class="container">
            <div class="section-header text-start mx-0 mb-4">
                <h2 class="section-title">Berita Terbaru Museum</h2>
            </div>
            <div class="row row-cards">
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container mt-4">
            <div class="section-header text-start mx-0 mb-4">
                <h2 class="section-title">Kegiatan Terbaru Museum</h2>
            </div>
            <div class="row row-cards">
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Berita 1 -->
                <div class="col-md col-12">
                    <div class="card bg-transparent border-0">
                        <!-- Photo -->
                        <a href="#" class="img-responsive img-responsive-21x9 rounded-3"
                            style="background-image: url({{ asset('img/image.png') }})">
                        </a>
                        <div class="card-body px-0 ">
                            <a href="#" class="text-dark">
                                Puluhan siswa SMA melakukan kunjungan edukatif untuk mengenal sejarah dan budaya
                                lokal
                                Muna.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
