<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jesa Electronics | @yield('page_title')</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->


    <link href="{{ asset('frontend_assets/theme_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/theme_assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">



    <link href="{{ asset('frontend_assets/theme_assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/custom_css.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    @include('frontend.layout.topbar')

    <!-- ======= Header ======= -->
    @include('frontend.layout.header')
    <!-- End Header -->


    @yield('content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.layout.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <script src="{{ asset('frontend_assets/theme_assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend_assets/theme_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/theme_assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/theme_assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/theme_assets/vendor/php-email-form/validate.js') }}"></script>


    <script src="{{ asset('frontend_assets/theme_assets/js/main.js') }}"></script>

</body>

</html>