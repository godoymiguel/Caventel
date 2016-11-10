<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="CAVENTEL Admin">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
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
    <!-- SUMMERNOTE -->
</head>

<body>
                <!-- Page content-->
    <div class="content-wrapper" >
        <!-- START panel-->
        <div class="panel panel-default">
            <!-- START table-responsive-->
            <div class="table-responsive">
                <div class="panel-body">
                    <div class="table-responsive" id="print" >
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Total Capital (Bs)</th>
                                <th>Total Haberes (Bs)</th>
                                <th>Intereses Generados (Bs)</th>
                                <th>Haberes en Inmuebles (Bs)</th>
                                <th>Retirado para Gastos (Bs)</th>
                                <th>Total Prestamos (Bs)</th>
                                <th>Capital Disponible (Bs)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="success">
                                <td>{{ number_format($totalCapital,2,".",",") }}</td>
                                <td>{{ number_format($totalAsset,2,".",",") }}</td>
                                <td>{{ number_format($interest,2,".",",") }}</td>
                                <td>{{ number_format($totalProperty,2,".",",") }}</td>
                                <td>{{ number_format($retirement,2,".",",") }}</td>
                                <td>{{ number_format($userLoan,2,".",",") }}</td>
                                <td>{{ number_format($available,2,".",",") }}</td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END table-responsive-->

        </div>

    </div>
    <script type="text/javascript" src="{{ asset('plugins/html2canvas/build/html2canvas.js') }}"></script>
        <script type="text/javascript">
           $( document.body ).ready(function() {
                $("#print").click(function(e){
                e.preventDefault();
                    html2canvas($("#print"), {
                        onrendered: function (canvas) {
                            var myImage = canvas.toDataURL("image/png");
                            window.open(myImage);
                            window.document.close(); // necessary for IE >= 10
                            window.focus(); // necessary for IE >= 10
                            window.print();
                            window.close();
                            }
                    });
                });
            });
    </script>
 
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
    <!-- CKEDITOR -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <!-- =============== APP SCRIPTS ===============-->
    <script src="{{ asset('js/app.js')}}"></script>

</body>

</html>