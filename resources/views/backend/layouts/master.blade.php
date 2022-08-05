<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title> Easy Tender Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico')}}">

    <!-- jsvectormap css -->
    <link href="{{ asset('backend/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('backend/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
    
    <!-- Layout config Js -->
    <script src="{{ asset('backend/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/css/app.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('backend/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- page css add here -->
    @stack('css')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

       @include('backend.layouts.partials.header')

        <!-- ========== App Menu ========== -->
       @include('backend.layouts.partials.sidebar')
        <!-- Left Sidebar End -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

           @include('backend.layouts.partials.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="{{ asset ('backend/libs/bootstrap/js/bootstrap.bundle.min.')}}js"></script>
    <script src="{{ asset ('backend/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset ('backend/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset ('backend/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset ('backend/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{ asset ('backend/js/plugins.js')}}"></script>

    <!-- Vector map-->
    <script src="{{ asset('backend/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{ asset('backend/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('backend/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('backend/js/pages/dashboard-ecommerce.init.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/js/app.js')}}"></script>

    <!-- page js add here -->
    @stack('js')
</body>

</html>