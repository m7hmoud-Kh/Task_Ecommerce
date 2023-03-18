<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title','default page')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('website/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{asset('website/vendor/lightbox2/css/lightbox.min.css')}}">
    <!-- Range slider-->
    <link rel="stylesheet" href="{{asset('website/vendor/nouislider/nouislider.min.css')}}">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="{{asset('website/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="{{asset('website/vendor/owl.carousel2/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/vendor/owl.carousel2/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('website/css/style.default.css')}}" id="theme-stylesheet">

    <link rel="stylesheet" href="{{asset('website/vendor/fontawesome-free-6.3.0-web/css/all.css')}}">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('website/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('website/img/favicon.png')}}">
    <!-- Tweaks for older IEs-->

</head>

<body>
    <div class="page-holder">
        <!-- navbar-->
        @include('includes.header')
        <div class="container">
            <!-- HERO SECTION-->
            @yield('hero_section', View::make('includes.hero_section'))
            @yield('content')
        </div>
        {{-- footer --}}
        @include('includes.footer')
        <!-- JavaScript files-->
        <script src="{{asset('website/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('website/vendor/lightbox2/js/lightbox.min.js')}}"></script>
        <script src="{{asset('website/vendor/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('website/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('website/vendor/owl.carousel2/owl.carousel.min.js')}}"></script>
        <script src="{{asset('website/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
        <script src="{{asset('website/js/front.js')}}"></script>
        <!-- Nouislider Config-->

    </div>
</body>

</html>
