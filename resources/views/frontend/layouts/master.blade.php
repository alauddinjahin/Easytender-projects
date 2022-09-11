<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>@yield('title','Easy Tender')</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    {{-- <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png"> --}}
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css')}}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/flaticon.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css')}}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/off-canvas.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/rsmenu-main.css')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/inc/custom-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/inc/custom-slider/css/preview.css')}}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/rs-spacing.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css')}}">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/common_assets/libs/daterangepicker/daterangepicker.css') }}">
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/common_assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/common_assets/libs/summernote/summernote-bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/common_assets/libs/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/common_assets/libs/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css')}}">

    @stack('css')

</head>

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    {{-- @include('frontend.layouts.partials.preloader') --}}
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">


        <!--Full width header Start-->
            @include('frontend.layouts.partials.header')
        <!--Full width header End-->

        @yield('content')

    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    @include('frontend.layouts.partials.footer')
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

  

    <!-- modernizr js -->
    <script src="{{ asset('frontend/js/modernizr-2.8.3.min.js')}}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- op nav js -->
    <script src="{{ asset('frontend/js/jquery.nav.js')}}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('frontend/js/skill.bars.jquery.js')}}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- waypoints.min js -->
    <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
    <!-- counterup.min js -->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nivo slider js -->
    <script src="{{ asset('frontend/inc/custom-slider/js/jquery.nivo.slider.js')}}"></script>
    <!-- contact form js -->
    <script src="{{ asset('frontend/js/contact.form.js')}}"></script>

    <!-- daterangepicker -->
    <script src="{{ asset('assets/common_assets/libs/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/common_assets/libs/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('assets/common_assets/libs/summernote/summernote-bs4.min.js') }}"></script>
    
    <script src="{{ asset('assets/common_assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/common_assets/libs/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/backend/libs/notifications/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/config.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('frontend/js/main.js')}}"></script>

    @stack('js')

</body>
</html>