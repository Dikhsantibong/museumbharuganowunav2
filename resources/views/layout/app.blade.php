<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'city Wall')</title>
    <!-- fav icon link -->
    <link rel="shortcut icon" href="images/fav-icon/fav-logo.png" type="image/x-icon">
    <!-- font awesome-->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Jost:ital,wght@0,100..900;1,100..900&family=Manrope:wght@200..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Link slick slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <!-- letter animation -->
    <link rel="stylesheet" href="{{ asset('css/cssanimation.min.css') }}">
    <!-- lordicon icons animation -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <!-- AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- css link -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    @stack('styles')
</head>
<body>
    @yield('content')
    <!-- jQuery js -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- letter animation -->
    <script src="{{ asset('js/plugins/letteranimation.min.js') }}"></script>
    <!-- AOS animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- font awesome -->
    <script src="{{ asset('js/all.min.js') }}"></script>
    <!-- slick slider JS -->
    <script src="{{ asset('js/plugins/slick.js') }}"></script>
    <script src="{{ asset('js/plugins/slick.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
