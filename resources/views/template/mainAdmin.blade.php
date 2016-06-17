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
    <!-- TAGS INPUT-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-tagsinput.css') }}">
    <!-- SLIDER CTRL-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-slider.min.css') }}">
    <!-- CHOSEN-->
    <link rel="stylesheet" href="{{ asset('css/chosen.min.css') }}">
    <!-- DATETIMEPICKER-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
    <!-- COLORPICKER-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-colorpicker.css') }}">
    <!-- TRUMBOWYG-->
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
    <!-- SELECT2-->
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2-bootstrap.css') }}">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" id="maincss">
</head>

<body>
    <div class="wrapper">

        @yield('divBlockCenter')
        @yield('divAdmin')
        @yield('lockScream')

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
    <script src="{{ asset('js/demo-rtl.js') }}"></script>
    <!-- =============== PAGE SCRIPTS ===============-->
    <!-- FILESTYLE-->
    <script src="{{ asset('js/bootstrap-filestyle.js') }}"></script>
    <!-- TAGS INPUT-->
    <script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
    <!-- CHOSEN-->
    <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
    <!-- SLIDER CTRL-->
    <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
    <!-- INPUT MASK-->
    <script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>
    <!-- TRUMBOWYG-->
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/trumbowyg//langs/es.min.js') }}"></script>
    <!-- MOMENT JS-->
    <script src="{{ asset('js/moment-with-locales.min.js') }}"></script>
    <!-- DATETIMEPICKER-->
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- COLORPICKER-->
    <script type="text/javascript" src="{{ asset('js/bootstrap-colorpicker.js') }}"></script>
    <!-- Demo-->
    <script src="{{ asset('js/demo-forms.js') }}"></script>
    <!-- SELECT2-->
    <script src="{{ asset('js/select2.js') }}"></script>
    <!-- PARSLEY-->
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{ asset('js/app.js')}}"></script>

    @yield('js')
</body>

</html>