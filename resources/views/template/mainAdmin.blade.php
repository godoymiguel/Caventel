<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="CAVENTEL Admin">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>@yield('title') Caja de Ahorro Venezola de Telefericos</title>
    <!-- =============== STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="{{ asset('css/whirl.css') }}">
    <!-- =============== PAGE STYLES ===============-->
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
    <!-- =============== SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <!-- MATCHMEDIA POLYFILL-->
    <script src="{{ asset('js/matchMedia.js') }}"></script>
    <!-- JQUERY-->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <!-- BOOTSTRAP-->
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <!-- STORAGE API-->
    <script src="{{ asset('js/jquery.storageapi.js')}}"></script>
    <!-- PARSLEY-->
    <script src="{{ asset('js/parsley.min.js')}}"></script>
    <!-- JQUERY EASING-->
    <script src="{{ asset('js/jquery.easing.js') }}"></script>
    <!-- ANIMO-->
    <script src="{{ asset('js/animo.js') }}"></script>
    <!-- SLIMSCROLL-->
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <!-- SCREENFULL-->
    <script src="{{ asset('js/screenfull.js') }}"></script>
    <!-- LOCALIZE-->
    <script src="{{ asset('js/jquery.localize.js') }}"></script>
    <!-- RTL demo-->
    <script src="{{ asset('js/demo/demo-rtl.js') }}"></script>
    <!-- =============== PAGE SCRIPTS ===============-->

    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{ asset('js/app.js')}}"></script>
</body>


</html>