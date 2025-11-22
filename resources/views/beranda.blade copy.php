@extends('layouts.app')

@section('content')
    <!-- end navbar -->
    <header class="slider">
        <div class="swiper-container slider-images">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="images/slide01.jpg">
                    <div class="mobile-slide" data-background="images/slide0100.png"></div>
                </div>
                <div class="swiper-slide" data-background="images/slide0100.png">
                    <div class="mobile-slide" data-background="images/slide0100.png"></div>
                </div>
                <div class="swiper-slide" data-background="images/slide01.jpg">
                    <div class="mobile-slide" data-background="images/slide0100.png"></div>
                </div>
            </div>
            <!-- end swiper-wrapper -->
            <div class="container-fluid slider-nav">
                <div class="swiper-pagination"></div>
                <!-- end swiper-pagination -->
                {{-- <div class="swiper-fraction"></div> --}}
                <!-- end swiper-fraction -->
                <div class="button-prev">
                    <i class="far fa-chevron-down"></i>
                </div>
                <!-- end swiper-button-prev -->
                <div class="button-next">
                    <i class="far fa-chevron-up"></i>
                </div>
                <!-- end swiper-button-next -->
            </div>
            <!-- end slider-nav -->
        </div>
        <!-- end slider-images -->
        <div class="swiper-container slider-texts">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph"
                    d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <div class="swiper-wrapper">

                <!-- SLIDE 1 -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1>
                            Museum Bharugano <br />
                            Wuna
                        </h1>
                        <p>
                            Menyajikan perjalanan sejarah dan kebudayaan Muna melalui <br> koleksi,
                            arsip, dan ruang pamer yang autentik serta penuh <br> nilai historis.
                        </p>
                    </div>
                </div>
                <!-- end swiper-slide -->
            
                <!-- SLIDE 2 -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1>
                            Jelajahi Warisan <br />
                            Peradaban Muna
                        </h1>
                        <p>
                            Temukan artefak bersejarah, tradisi leluhur, dan kisah <br> peradaban Muna
                            yang diwariskan dari generasi ke generasi <br> untuk masyarakat masa kini.
                        </p>
                    </div>
                </div>
                <!-- end swiper-slide -->
            
                <!-- SLIDE 3 -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1>
                            Eksplorasi Digital <br />
                            yang Imersif
                        </h1>
                        <p>
                            Nikmati pengalaman museum modern melalui tur virtual, <br> pratinjau 3D,
                            dan media interaktif yang menghadirkanbr <br> sejarah dalam format baru.
                        </p>
                    </div>
                </div>
                <!-- end swiper-slide -->
            </div>            
            <!-- end swiper-wrapper -->
        </div>
        <!-- end slider-texts -->
        {{-- <div class="play-now">
            <a href="videos/video.mp4" data-fancybox data-width="640" data-height="360" class="play-btn"></a>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                xml:space="preserve">
                <defs>
                    <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                </defs>
                <circle cx="150" cy="100" r="75" fill="none" />
                <g>
                    <use xlink:href="#circlePath" fill="none" />
                    <text>
                        <textPath xlink:href="#circlePath">
                            PLAY NOW - PLAY NOW - PLAY NOW -
                        </textPath>
                    </text>
                </g>
            </svg>
        </div> --}}
        <!-- end play-now -->
    </header>
    <!-- end slider -->
    
    <!-- 4 CARD FLOATING (VIDEO, VT, ROBLOX, QUIZ) -->
    <div class="container" style="margin-top:-130px; margin-bottom:40px; position:relative; z-index:9;">
        <div class="row justify-content-center gy-4">
            <!-- Card 1: Video Profil -->
            <div class="col-md-3">
                <div class="card shadow-lg text-center py-4 h-100" style="min-height: 230px;">
                    <div style="font-size:40px; margin-bottom:18px;"><i class="fas fa-play-circle"></i></div>
                    <h5 style="font-family:'Cinzel',serif; font-weight:bold;">Video Profil</h5>
                    <p style="font-size: 16px;padding: 10px; ">Lihat profil Museum Bharugano Wuna dalam format video singkat dan inspiratif.</p>
                    <a href="https://www.youtube.com/watch?v=xxxxxxx" target="_blank" class="custom-button" style="margin-top:12px;">Tonton Video</a>
                </div>
            </div>
            <!-- Card 2: Virtual Tour -->
            <div class="col-md-3">
                <div class="card shadow-lg text-center py-4 h-100" style="min-height: 230px;">
                    <div style="font-size:40px; margin-bottom:18px;"><i class="fas fa-vr-cardboard"></i></div>
                    <h5 style="font-family:'Cinzel',serif; font-weight:bold;">Virtual Tour</h5>
                    <p style="font-size: 16px; padding: 15px;">Jelajahi museum secara digital dari mana saja melalui virtual tour imersif.</p>
                    <a href="/virtual-tour" target="_blank" class="custom-button" style="margin-top:12px;">Coba Sekarang</a>
                </div>
            </div>
            <!-- Card 3: Game Roblox -->
            <div class="col-md-3">
                <div class="card shadow-lg text-center py-4 h-100" style="min-height: 230px;">
                    <div style="font-size:40px; margin-bottom:18px;"><i class="fab fa-roblox"></i></div>
                    <h5 style="font-family:'Cinzel',serif; font-weight:bold;">Game Roblox</h5>
                    <p style="font-size: 16px; padding: 10px;">Seru! Masuki dunia Roblox bertema museum dan mainkan edukasi interaktif!</p>
                    <a href="https://www.roblox.com/games/104634170739997/" target="_blank" class="custom-button" style="margin-top:12px;">Mainkan Game</a>
                </div>
            </div>
            <!-- Card 4: Quiz -->
            <div class="col-md-3">
                <div class="card shadow-lg text-center py-4 h-100" style="min-height: 230px;">
                    <div style="font-size:40px; margin-bottom:18px;"><i class="fas fa-question-circle"></i></div>
                    <h5 style="font-family:'Cinzel',serif; font-weight:bold;">Kuis Museum</h5>
                    <p style="font-size: 16px; padding: 10px;">Uji pengetahuan kamu tentang Museum Bharugano Wuna dan sejarah Muna lewat pertanyaan seru!</p>
                    <a href="/kuis-museum" target="_blank" class="custom-button" style="margin-top:12px;">Mulai Kuis</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END 3 CARD FLOATING -->
<section class="content-section" data-background="#fffbf7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <figure>
                        <img src="images/title-shape.png" alt="Image" />
                    </figure>
                    <h2>
                        Pusat Warisan Sejarah & Budaya Muna
                    </h2>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->

            <div class="col-lg-7">
                <figure class="image-box" data-scroll data-scroll-speed="-1">
                    <img src="images/secondcontent.JPG" alt="Image" />
                </figure>
            </div>
            <!-- end col-7 -->

            <div class="col-lg-5">
                <div class="side-icon-list right-side">
                    <ul>

                        <!-- ITEM 1 -->
                        <li>
                            <figure>
                                <img src="images/icon01.png" alt="Image" />
                            </figure>
                            <div class="content">
                                <h5>Jam Kunjungan</h5>
                                <p>
                                    Senin – Jumat : 09.00 – 16.00 <br />
                                    Sabtu – Minggu : 10.00 – 17.00
                                </p>
                            </div>
                            <!-- end content -->
                        </li>

                        <!-- ITEM 2 -->
                        <li>
                            <figure>
                                <img src="images/icon02.png" alt="Image" />
                            </figure>
                            <div class="content">
                                <h5>Pemesanan Tiket</h5>
                                <p>
                                    Beberapa tur digital dan acara edukasi <br />
                                    memerlukan pemesanan terlebih dahulu.
                                </p>
                                <a href="#">Pesan Tiket & Layanan</a>
                            </div>
                            <!-- end content -->
                        </li>

                        <!-- ITEM 3 -->
                        <li>
                            <figure>
                                <img src="images/icon03.png" alt="Image" />
                            </figure>
                            <div class="content">
                                <h5>Lokasi Museum</h5>
                                <p>
                                    Jl. Museum Bharugano Wuna <br />
                                    Kabupaten Muna, Sulawesi Tenggara
                                </p>
                            </div>
                            <!-- end content -->
                        </li>

                    </ul>
                </div>
                <!-- end side-icon-list -->
            </div>
            <!-- end col-5 -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
    
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title">
                        <figure>
                            <img src="images/title-shape.png" alt="Image" />
                        </figure>
                        <h6>Koleksi Pilihan Museum</h6>
                        <h2>Koleksi Terbaik & Unggulan</h2>
                    </div>
                    <!-- end section-title -->
                </div>
    
                <div class="col-lg-3">
                    <a href="#" class="circle-button">BUKU <br />KOLEKSI</a>
                </div>
                <!-- end col-3 -->
            </div>
    
            <div class="row justify-content-center">
    
                <!-- ITEM 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="exhibition-box" data-scroll data-scroll-speed="-1">
                        <figure>
                            <a href="#"><img src="images/koleksi1.JPG" alt="Image" class="img" /></a>
                            <div class="info">
                                <figure class="i">
                                    <img src="images/icon-info.png" alt="Image" />
                                </figure>
                                <span>Koleksi Unggulan</span>
                            </div>
                        </figure>
                        <div class="content-box">
                            <h4><a href="#">Perhiasan Tradisional Muna</a></h4>
                            <p>Artefak budaya dengan nilai sejarah tinggi.</p>
                        </div>
                    </div>
                </div>
    
                <!-- ITEM 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="exhibition-box" data-scroll data-scroll-speed="1">
                        <figure>
                            <a href="#"><img src="images/koleksi2.jpg" alt="Image" class="img" /></a>
                            <div class="info">
                                <figure class="i">
                                    <img src="images/icon-info.png" alt="Image" />
                                </figure>
                                <span>Koleksi Terbaik</span>
                            </div>
                        </figure>
                        <div class="content-box">
                            <h4><a href="#">Keris Pusaka Keraton</a></h4>
                            <p>Simbol kebesaran dan warisan sejarah.</p>
                        </div>
                    </div>
                </div>
    
                <!-- ITEM 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="exhibition-box" data-scroll data-scroll-speed="-0.5">
                        <figure>
                            <a href="#"><img src="images/koleksi3.JPG" alt="Image" class="img" /></a>
                            <div class="info">
                                <figure class="i">
                                    <img src="images/icon-info.png" alt="Image" />
                                </figure>
                                <span>Koleksi Favorit Pengunjung</span>
                            </div>
                        </figure>
                        <div class="content-box">
                            <h4><a href="#">Patung Kayu Ukir Tradisional</a></h4>
                            <p>Karya seni penuh detail dan nilai estetika.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 text-center">
                    <a href="#" class="custom-button">LIHAT SEMUA KOLEKSI</a>
                </div>
    
            </div>
    
        </div>
    </section>    
    <!-- end content-section -->
    {{-- <section class="content-section no-bottom-spacing bottom-white" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure>
                            <img src="images/title-shape.png" alt="Image" />
                        </figure>
                        <h2>
                            Art Inspiration of <br />
                            19th Century
                        </h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="-1">
                        <h6>The challenge</h6>
                        <p>
                            In the 1980s, “the UK’s national museums
                            faced political pressure from the
                            <strong>Conservative</strong> government
                            to charge for admission, to make them
                            less dependent on government funding".
                        </p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="0.5">
                        <h6>The initiative</h6>
                        <p>
                            In 1997, the new Labour government made
                            a commitment to reinstate free entry for
                            <strong>national</strong> museums in
                            order to have a more diverse range of
                            visitors. “Following a campaign led by
                            the museums themselves,
                        </p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="text-content" data-scroll data-scroll-speed="1">
                        <h6>The impact</h6>
                        <p>
                            The national museums which dropped
                            charges all saw
                            <strong>substantial</strong> increases
                            to their visitor numbers, an average of
                            70 percent. In the first year after free
                            admission was introduced visitor
                            figures.
                        </p>
                    </div>
                    <!-- end text-content -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="clearfix spacing-100"></div>
        <div class="horizontal-scroll">
            <div class="scroll-inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="5">
                <div class="scroll-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="image-box" data-scroll data-scroll-speed="0">
                                    <img src="images/image01.jpg" alt="Image" />
                                </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-4 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0">
                                    <img src="images/image02.jpg" alt="Image" />
                                </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0">
                                    <img src="images/image03.jpg" alt="Image" />
                                </figure>
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end scroll-wrapper -->
                <div class="scroll-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <figure class="image-box" data-scroll data-scroll-speed="0">
                                    <img src="images/image01.jpg" alt="Image" />
                                </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-4 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0">
                                    <img src="images/image02.jpg" alt="Image" />
                                </figure>
                            </div>
                            <!-- end col-3 -->
                            <div class="col-md-2 offset-md-1">
                                <figure class="image-box" data-scroll data-scroll-speed="0">
                                    <img src="images/image03.jpg" alt="Image" />
                                </figure>
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- end scroll-wrapper -->
            </div>
            <!-- end scroll-inner -->
        </div>
        <!-- end horizontal-scroll -->
    </section>
    <!-- end content-section --> --}}
    {{-- <section class="content-section no-bottom-spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure>
                            <img src="images/title-shape.png" alt="Image" />
                        </figure>
                        <h6>Visit the National Wandau Museum</h6>
                        <h2>3 steps to be safe</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="image-icon-box" data-scroll data-scroll-speed="-1">
                        <figure class="icon">
                            <img src="images/icon04.png" alt="Image" />
                        </figure>
                        <figure class="content-image">
                            <img src="images/image04.jpg" alt="Image" />
                        </figure>
                        <div class="content-box">
                            <b>01.</b>
                            <h4>Check What's Open</h4>
                            <div class="expand">
                                <p>
                                    Your safety is our first
                                    priority. Entry to the National
                                    Maritime Museum is still free,
                                    but to help us ensure social
                                    distancing.
                                </p>
                                <a href="#" class="custom-link">Learn More</a>
                            </div>
                            <!-- end expand -->
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end image-icon-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4">
                    <div class="image-icon-box" data-scroll data-scroll-speed="0.5">
                        <figure class="icon">
                            <img src="images/icon05.png" alt="Image" />
                        </figure>
                        <figure class="content-image">
                            <img src="images/image05.jpg" alt="Image" />
                        </figure>
                        <div class="content-box">
                            <b>02.</b>
                            <h4>Booking Online</h4>
                            <div class="expand">
                                <p>
                                    Exhibition curator Venetia
                                    Porter presents this new
                                    exhibition of works by artists
                                    from Iran to Morocco drawn from
                                    the Museum collection.
                                </p>
                                <a href="#" class="custom-link">Learn More</a>
                            </div>
                            <!-- end expand -->
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end image-icon-box -->
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4">
                    <div class="image-icon-box" data-scroll data-scroll-speed="1">
                        <figure class="icon">
                            <img src="images/icon06.png" alt="Image" />
                        </figure>
                        <figure class="content-image">
                            <img src="images/image06.jpg" alt="Image" />
                        </figure>
                        <div class="content-box">
                            <b>03.</b>
                            <h4>Keep Your Distance</h4>
                            <div class="expand">
                                <p>
                                    Take a look at our past
                                    exhibitions and enjoy the
                                    articles, videos and photo
                                    galleries still available to
                                    view online.
                                </p>
                                <a href="#" class="custom-link">Learn More</a>
                            </div>
                            <!-- end expand -->
                        </div>
                        <!-- end content-box -->
                    </div>
                    <!-- end image-icon-box -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section --> --}}
    <section class="content-section">
        <div class="container">
            <div class="row g-0 align-items-center">
    
                <div class="col-lg-6">
                    <div class="art-slider">
    
                        <div class="titles">
                            <h6>Koleksi Seni & Budaya</h6>
                            <h2>
                                Koleksi Ikonik <br />
                                Museum Kita
                            </h2>
                        </div>
    
                        <div class="swiper-container art-slider-content">
                            <div class="swiper-wrapper">
    
                                <div class="swiper-slide">
                                    <span>01</span>
                                    <h3>
                                        Patung Tradisional <br />
                                        Nusantara
                                    </h3>
                                </div>
    
                                <div class="swiper-slide">
                                    <span>02</span>
                                    <h3>
                                        Baju Adat <br />
                                        Kerajaan Muna
                                    </h3>
                                </div>
    
                                <div class="swiper-slide">
                                    <span>03</span>
                                    <h3>
                                        Keris Pusaka <br />
                                        Warisan Leluhur
                                    </h3>
                                </div>
    
                                <div class="swiper-slide">
                                    <span>04</span>
                                    <h3>
                                        Lukisan Sejarah <br />
                                        Benteng Muna
                                    </h3>
                                </div>
    
                                <div class="swiper-slide">
                                    <span>05</span>
                                    <h3>
                                        Artefak <br />
                                        Peradaban Kuno
                                    </h3>
                                </div>
    
                            </div>
                        </div>
    
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="art-slider" data-scroll data-scroll-speed="1">
    
                        <div class="swiper-container art-slider-images">
                            <div class="swiper-wrapper">
    
                                <div class="swiper-slide">
                                    <img src="images/art-slide01.jpg" alt="Image" />
                                </div>
    
                                <div class="swiper-slide">
                                    <img src="images/art-slide02.jpg" alt="Image" />
                                </div>
    
                                <div class="swiper-slide">
                                    <img src="images/art-slide03.jpg" alt="Image" />
                                </div>
    
                                <div class="swiper-slide">
                                    <img src="images/art-slide04.jpg" alt="Image" />
                                </div>
    
                                <div class="swiper-slide">
                                    <img src="images/art-slide05.jpg" alt="Image" />
                                </div>
    
                            </div>
                        </div>
    
                    </div>
                </div>
    
            </div>
        </div>
    </section>    
    <section class="content-section">
        <div class="video-bg">
            <video src="videos/video.mp4" loop autoplay playsinline muted></video>
        </div>
        <!-- end video-bg -->
    
        <div class="container">
            <div class="cta-box" data-scroll data-scroll-speed="-1">
                <h6>AYO BERPARTISIPASI</h6>
                <h2>
                    Bantu Kami Meningkatkan Layanan <br />
                    Museum Bharugano Wuna
                </h2>
                
    
                <a href="#" class="custom-button">ISI SURVEI</a>
            </div>
            <!-- end cta-box -->
        </div>
        <!-- end container -->
    </section>
    
    
    <!-- end content-section -->
   <section class="content-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <figure>
                        <img src="images/title-shape.png" alt="Image" />
                    </figure>
                    <h6>Informasi & Pembaruan Terkini</h6>
                    <h2>Berita Museum</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- NEWS LIST -->
    <div class="container">
        <div class="row">

            <!-- NEWS ITEM 1 -->
            <div class="col-12">
                <div class="recent-news">
                    <div class="content-box">
                        <small>Jan 12, 2025</small>
                        <h3>Pameran Koleksi Kerajaan Muna Resmi Dibuka</h3>
                        <p>
                            Museum Bharugano Wuna membuka pameran khusus yang menampilkan 
                            artefak warisan Kerajaan Muna, termasuk tombak pusaka, perangkat 
                            kerajaan, serta dokumentasi visual perjalanan sejarahnya.
                        </p>
                        <a href="#" class="custom-link">Baca selengkapnya</a>
                    </div>
                    <figure data-scroll data-scroll-speed="-1">
                        <img src="images/recent-news04.jpg" alt="Image" />
                    </figure>
                </div>
            </div>

            <!-- NEWS ITEM 2 -->
            <div class="col-12">
                <div class="recent-news">
                    <div class="content-box">
                        <small>Dec 28, 2024</small>
                        <h3>Program Edukasi “Belajar di Museum” untuk Pelajar</h3>
                        <p>
                            Program edukasi terbaru diperkenalkan untuk siswa SD hingga SMA, 
                            menghadirkan tur edukasi, pemutaran film sejarah, dan workshop 
                            kebudayaan daerah secara langsung.
                        </p>
                        <a href="#" class="custom-link">Baca selengkapnya</a>
                    </div>
                    <figure data-scroll data-scroll-speed="1">
                        <img src="images/recent-news05.jpg" alt="Image" />
                    </figure>
                </div>
            </div>

            <!-- SEE ALL BUTTON -->
            <div class="col-12 text-center">
                <a href="news.html" class="circle-button">LIHAT<br />SEMUA BERITA</a>
            </div>
        </div>
    </div>
</section>

    <!-- end content-section -->
    <section class="content-section no-spacing py-5" data-background="#94ffc4" style="background:#94ffc4;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="newsletter-box d-flex flex-wrap align-items-center justify-content-between p-4 rounded-4 shadow-sm" style="background:white;">
                        
                        <!-- FORM -->
                        <div class="form" style="max-width:550px;">
                            <div class="titles mb-3">
                                <h6 class="text-uppercase text-muted mb-1">Subscribe Newsletter</h6>
                                <h2 class="fw-bold">Sign up to get the latest news</h2>
                            </div>
    
                            <div class="inner d-flex flex-wrap gap-2">
                                <input type="email" placeholder="Enter your e-mail address" class="newsletter-input" />
                                <input type="submit" value="SIGN UP" class="newsletter-btn" />
                            </div>
    
                            <small class="d-block mt-3 text-muted">
                                Will be used in accordance with our <a href="#" class="text-decoration-underline">Privacy Policy</a>
                            </small>
                        </div>
    
                        <!-- IMAGE -->
                        <figure class="newsletter-image mt-4 mt-md-0" data-scroll data-scroll-speed="0.7">
                            <img src="images/newsletter-image.png" alt="Image" class="newsletter-img" style="max-width:350px;">
                        </figure>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .newsletter-input {
            padding: 12px 18px;
            border: 1px solid #ccc;
            border-radius: 10px;
            flex: 1;
            min-width: 230px;
            transition: 0.3s ease;
        }
    
        .newsletter-input:focus {
            border-color: #00b86f;
            box-shadow: 0 0 8px rgba(0, 184, 111, 0.2);
            outline: none;
        }
    
        .newsletter-btn {
            padding: 12px 24px;
            background: #00b86f;
            border: none;
            color: white;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }
    
        .newsletter-btn:hover {
            background: #00995c;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }
    
        .newsletter-img {
            width: 100%;
            height: auto;
            animation: float 4s ease-in-out infinite;
        }
    
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
    
@endsection
