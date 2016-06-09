<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->


<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title') Caja de Ahorro Venezola de Telefericos</title>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('js/ie-fixes.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/ie-fixes.css')}}">
    <![endif]-->

    <meta name="description" content="Caventel Web">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- This should placed first off all other scripts -->
    <link rel="stylesheet" href="{{ asset('css/revolution_settings.css')}}">
    <link rel="stylesheet" href="{{ asset('css/_bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/axfont.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tipsy.css')}}">
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{ asset('css/isotop_animation.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">


    <!-- remprod -->
    <link rel="stylesheet" href="{{ asset('css/_colorpicker.css')}}">
    <!-- end remprod -->

    <link href='{{ asset('css/style.css')}}' rel='stylesheet' type='text/css'>
    <link href='{{ asset('css/responsive.css')}}' rel='stylesheet' type='text/css'>

    <link href="{{ asset('css/skins/light-blue.css')}}" rel='stylesheet' type='text/css' id="skin-file">

    <!-- remprod -->
    <style type="text/css" id="skin-chooser-css">

    </style>
    <!-- end remprod -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <!-- Fonts -->
    <link href='{{ asset('css/css0e2b.css?family=Open+Sans:400,600')}}' rel='stylesheet' type='text/css'>
    <link href='{{ asset('css/cssb761.css?family=Raleway:400,100,200,300,500,600')}}' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('js/respond.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/color-chooser.css')}}">
</head>
<body>
@yield('content')

<!-- section news -->
@yield('NewPageUser')
<!-- end section news -->

<script type="text/javascript" src="{{ asset('js/_jq.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/_jquery.placeholder.js')}}"></script>

<!-- online -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '{{ asset('js/analytics.js')}}', 'ga');

    ga('create', 'UA-43664425-1', 'activeaxon.com');
    ga('send', 'pageview');

</script>
<!-- end online -->

<script src="{{ asset('js/activeaxon_menu.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/animationEnigne.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/ie-fixes.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jq.appear.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.base64.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.cycle.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.cycle2.carousel.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.easytabs.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.infinitescroll.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.isotope.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jQuery.scrollPoint.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.themepunch.plugins.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.tipsy.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.validate.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jQuery.XDomainRequest.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/web.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/retina.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/timeago.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/tweetable.jquery.js')}}" type="text/javascript"></script>
</body>


</html>
