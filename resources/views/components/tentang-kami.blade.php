@extends('layout.app')
@section('title', 'Tentang Kami')
@section('content')
@include('components.header')

<section class="about-company ">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-7" data-aos="fade-right">
                <div class="mb-4">
                    <img src="images/01_home/about-company/image-01.png" class="img-fluid rounded w-100 mb-3" alt="Museum Bharugano Wuna">
                </div>
                <p style="font-size: 16px;">
                    Museum Bharugano Wuna merupakan lembaga pelestarian budaya yang berfokus pada warisan sejarah
                    masyarakat Muna. Didirikan pada tahun 2025, museum ini menjadi pusat edukasi, penelitian, dan
                    dokumentasi kebudayaan yang berkembang di wilayah Bharugano dan sekitarnya.
                </p>
                <p style="font-size: 16px;">
                    Sebagai pusat informasi budaya, museum ini mengelola berbagai koleksi artefak sejarah, manuskrip,
                    peralatan tradisional, hingga dokumentasi visual yang berkaitan dengan perjalanan masyarakat Muna.
                    Selain itu, Museum Bharugano Wuna aktif menyelenggarakan program edukasi, pameran tematik, serta
                    kolaborasi riset bersama akademisi.
                </p>
                <!-- Listing -->
                <div class="company-list row row-cols-1 row-cols-md-2 g-2 my-4">
                    <div class="col">
                        <ul class="gap-2">
                            <li><span class="square"></span><span>Melestarikan budaya dan sejarah Muna</span></li>
                            <li><span class="square"></span><span>Menyediakan ruang edukasi bagi pelajar & peneliti</span></li>
                            <li><span class="square"></span><span>Mengembangkan dokumentasi digital budaya</span></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="gap-2">
                            <li><span class="square"></span><span>Menyelenggarakan pameran dan workshop budaya</span></li>
                            <li><span class="square"></span><span>Menjalin kolaborasi dengan lembaga seni</span></li>
                            <li><span class="square"></span><span>Menjadi pusat arsip sejarah masyarakat Muna</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Video Intro -->
                <div class="company-videos d-flex align-items-center cityWall-btn-two mt-3">
                    <a href="{{ url('/beranda') }}">Kunjungi Museum <i class="bi bi-arrow-right"></i></a>
                    <div class="video-and-text ms-3">
                        <div class="home-pages-video-popup d-flex align-items-center gap-3">
                            <button onclick="videoPlayBtnOneFirst()" id="video-play-btn-one-first"
                                class="video-play-btn"><i class="bi bi-play"></i>
                            </button>
                            <div class="video-modal-wrapper one-first">
                                <div class="video-modal-content">
                                    <span onclick="videoCloseBtnOneFirst()" class="video-close-btn one-first">&times;</span>
                                    <video class="web-video one-first" controls>
                                        <source src="videos/cityWall.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <p class="m-0">Video Intro<br>Museum Bharugano Wuna</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bagian Kanan: Berita Ringkas -->
            <div class="col-12 col-lg-5" data-aos="fade-left">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h5 class="mb-3" style="font-weight:600;">Berita Terkini</h5>
                        {{-- Berita disajikan secara ringkas, hanya sebagian kecil --}}
                        <div class="mb-3 d-flex">
                            <div class="flex-shrink-0 me-3" style="width:80px;">
                                <img src="images/berita/berita1.jpg" class="img-fluid rounded" alt="Berita 1">
                            </div>
                            <div>
                                <a href="#" class="text-dark fw-bold d-block mb-1" style="font-size: 15px;">Pameran Koleksi Baru: Warisan Arkeologi Muna</a>
                                <span class="text-muted" style="font-size: 13px;">2 Juni 2025</span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="flex-shrink-0 me-3" style="width:80px;">
                                <img src="images/berita/berita2.jpg" class="img-fluid rounded" alt="Berita 2">
                            </div>
                            <div>
                                <a href="#" class="text-dark fw-bold d-block mb-1" style="font-size: 15px;">Workshop Batik Tradisional Bagi Pelajar</a>
                                <span class="text-muted" style="font-size: 13px;">20 Mei 2025</span>
                            </div>
                        </div>
                        <div class="mb-2 d-flex">
                            <div class="flex-shrink-0 me-3" style="width:80px;">
                                <img src="images/berita/berita3.jpg" class="img-fluid rounded" alt="Berita 3">
                            </div>
                            <div>
                                <a href="#" class="text-dark fw-bold d-block mb-1" style="font-size: 15px;">Digitalisasi Manuskrip Kuno Museum Bharugano Wuna</a>
                                <span class="text-muted" style="font-size: 13px;">5 Mei 2025</span>
                            </div>
                        </div>
                        <a href="{{ url('/berita') }}" class="btn btn-link px-0 mt-2" style="font-size: 15px;">Lihat semua berita <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.footer')
@endsection
