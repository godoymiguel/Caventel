<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="CAVENTEL Admin">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>@yield('title') Caja de Ahorro Venezola de Telefericos</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{ asset('vendor/whirl/dist/whirl.css') }}">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" id="maincss">
</head>

<body>
    <div class="wrapper">
        @yield('divBlockCenter')
        @yield('divAdmin')
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="{{ asset('vendor/modernizr/modernizr.custom.js') }}"></script>
    <!-- MATCHMEDIA POLYFILL-->
    <script src="{{ asset('vendor/matchMedia/matchMedia..css') }}"></script>
    <!-- JQUERY-->
    <script src="{{ asset('vendor/jquery/dist/jquery.js')}}"></script>
    <!-- BOOTSTRAP-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <!-- STORAGE API-->
    <script src="{{ asset('vendor/jQuery-Storage-API/jquery.storageapi.js')}}"></script>
    <!-- PARSLEY-->
    <script src="{{ asset('vendor/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- JQUERY EASING-->
    <script src="{{ asset('vendor/jquery.easing/js/jquery.easing.js') }}"></script>
    <!-- ANIMO-->
    <script src="{{ asset('vendor/animo.js/animo.js') }}"></script>
    <!-- SLIMSCROLL-->
    <script src="{{ asset('vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- SCREENFULL-->
    <script src="{{ asset('vendor/screenfull/dist/screenfull.js') }}"></script>
    <!-- LOCALIZE-->
    <script src="{{ asset('vendor/jquery-localize-i18n/dist/jquery.localize.js') }}"></script>
    <!-- RTL demo-->
    <script src="{{ asset('js/demo/demo-rtl.js') }}"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->

    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{ asset('js/app.js')}}"></script>
</body>


</html>