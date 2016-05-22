@extends('template.mainUser')

@section('title', 'Prestamos -')

@section('LoanUser')
    <div id="wrapper">

        <div class="top_wrapper">
            @include('template.Partials.divTopUser')
            <div class="top-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="page-info">
                                <h1 class="h1-page-title">
                                    ¿Prestamos?
                                </h1>

                                <h2 class="h2-page-desc">
                                    Contamos Con Excelente Financiamiento
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--.top wrapper end -->

        <div class="loading-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>

        <div class="content-wrapper hide-until-loading"><div class="body-wrapper">
                <div class="container">

                    <div class="row">

                        <div class="col-md-3 col-sm-3">
                            <div class="list-group">
                                <a href="#" class="list-group-item"> Personal </a>
                                <a href="#" class="list-group-item "> Hipotecario </a>
                                <a href="#" class="list-group-item "> Vehicular </a>
                                <a href="#" class="list-group-item "> Retiro de Haberes </a>

                            </div>
                        </div>

                        <div class="col-md-9 col-sm-9">
                            <h2 class="h2-section-title">Prestamo Personal</h2>
                            <p class="p-section-info">

                            </p>

                        </div>

                    </div>


                </div>

            </div>
        </div><!--.content-wrapper end -->
        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection