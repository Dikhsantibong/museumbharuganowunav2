<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Museum Bharugano Wuna</title>
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('dist/css/tabler-flags.min.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('dist/css/tabler-socials.min.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('dist/css/tabler-payments.min.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/tabler-marketing.min.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet" /> --}}
    <style>
        @import url('https://rsms.me/inter/inter.css');

        /* Navbar saat transparan (awal) */
        .navbar-transparent .navbar-brand,
        .navbar-transparent .navbar-nav .nav-link {
            color: white !important;
            transition: color 0.3s ease;
        }

        /* Navbar saat discroll */
        .navbar-scroll .navbar-brand,
        .navbar-scroll .navbar-nav .nav-link {
            color: #222 !important;
            /* warna dark */
        }

        /* Tambahkan shadow dan background putih */
        .navbar-scroll {
            background: white !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class=" body-marketing body-gradient">
    <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
    <div class="page bg-white">
        @include('components.alert.error')
        @include('components.alert.success')
        @include('components.navbar')
        @yield('content')
        @include('components.footer')
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('dist/libs/typed.js/dist/typed.umd.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toast = document.getElementById("toast-simple");

            if (toast) {
                setTimeout(() => {
                    toast.classList.remove("show");
                    toast.classList.add("hide");
                }, 3000); // 5 detik
            }
        });
    </script>
    <script>
        document.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");

            if (window.scrollY > 50) {
                navbar.classList.add("navbar-scroll");
                navbar.classList.remove("navbar-transparent");
            } else {
                navbar.classList.add("navbar-transparent");
                navbar.classList.remove("navbar-scroll");
            }
        });
    </script>

</body>

</html>
