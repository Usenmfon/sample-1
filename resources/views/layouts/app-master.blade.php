<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<!-- Head Section -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="P" />
    <meta name="keywords" content="" />
    <meta content="" name="author" />

    <!-- Pixeden Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pe-icon-7.css') }}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />

    <!-- css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" sizes="16x16" href="image/logo.jpeg">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/toastr.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme13.css')}}">
    <link href="{{asset('css/auth.css')}}" rel="stylesheet" />
    <link href="{{asset('plugin/TelPlugin/build/css/intlTelInput.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/switchery.min.css')}}">
    <link href="{{asset('css/doublesided.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/logo.jpeg')}}">

</head>
<!-- Head End -->
<body style="height:100vh;" class="d-flex flex-column">
    <!-- Loader -->
    {{-- <div id="preloader">
        <div id="status">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>
    </div> --}}

    <!--Navbar Start-->
        @include('components.navbar.index')
    <!-- Navbar End -->

    <!-- Home Page -->
        @yield('content')
    <!-- Home End -->




    <!-- Footer Start -->
    @if (Request::is('account/registration'))
        <div></div>
    @else
        @include('components.footer.index')
    @endif
    <!-- Footer End -->
    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <!-- anime -->
    <script src="js/anime.min.js"></script>
    <!-- COUNTER -->
    <!-- carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>

    <script src="js/site.js"></script>
    <script src="js/general.js"></script>
    <script src="app-assets/vendors/js/toastr.min.js" type="text/javascript"></script>
    <script src="lib/jquery-validation/dist/jquery.validate.js"></script>

</body>

<!-- Mirrored from verify.waeconline.org.ng/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 15:19:10 GMT -->
</html>
