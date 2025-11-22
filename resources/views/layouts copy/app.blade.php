<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="theme-color" content="#feed01" />
    <title>Wandau | Art & History Museum</title>
    <meta name="author" content="Themezinho" />
    <meta name="description" content="For all kind of exhibition museum website" />
    <meta name="keywords"
        content="wandau, exhibition, museum, art, history, entry, ticket, contemporary, modern, booking, visit, culture, life, centuries, roots, fancy, themezinho" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Wandau | Art & History Museum" />
    <meta property="og:image" content="http://www.themezinho.net/wandau/preview.png" />
    <meta property="og:site_name" content="wandau" />
    <meta property="og:title" content="wandau" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.themezinho.net/wandau" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@wandau" />
    <meta name="twitter:creator" content="@wandau" />
    <meta name="twitter:title" content="wandau" />
    <meta name="twitter:description" content="Wandau | Art & History Museum" />
    <meta name="twitter:image" content="http://www.themezinho.net/wandau/preview.png" />

    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144" />
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114" />
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72" />
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon" />
    <link href="ico/favicon.png" rel="shortcut icon" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <div class="preloader" id="preloader">
        <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
            <path
                d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z">
            </path>
        </svg>
        <div class="inner">
            <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
            <figure><img src="images/preloader.png" alt="Image" /></figure>
            <small>Loading</small>
        </div>
        <!-- end inner -->
    </div>
    <!-- end preloder -->
    <div class="page-transition">
        <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
            <path
                d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z">
            </path>
        </svg>
    </div>
    <!-- end page-transition -->
    <div class="smooth-scroll">
        <div class="section-wrapper" data-scroll-section>
            @include('components.search-box')
            @include('components.side-widget')
            @include('components.navbar')
            @yield('content')
            @include('components.footer')
        </div>
    </div>

    <!-- JS FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/locomotive-scroll.min.js') }}"></script>
    <script src="{{ asset('js/kinetic-slider.js') }}"></script>
    <script src="{{ asset('js/fancybox.min.js') }}"></script>
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
