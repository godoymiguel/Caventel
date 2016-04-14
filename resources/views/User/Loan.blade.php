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

        <div class="content-wrapper hide-until-loading">
            <div class="body-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="portfolio-filter-container">
                                <ul class="portfolio-filter">
                                    <li>
                                        <a href="#" data-filter=".personal">Personal</a>
                                    </li>
                                    <li>
                                        <a href="#" data-filter=".mortgage">Hipotecario</a>
                                    </li>
                                    <li>
                                        <a href="#" data-filter=".car">Vehicular</a>
                                    </li>
                                    <li>
                                        <a href="#" data-filter=".retirement">Retiro de Haberes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <div class="row">
                            <div class="portfolio-items ">

                                <!-- Item -->
                                <div class="thumb-label-item personal">

                                    <!-- Project Description -->
                                    <p>
                                        Prestamos Personal
                                    </p>

                                    <p>
                                        Prestamos De terceras Personal
                                    </p>


                                    <!-- //Project Description// -->


                                </div>
                                <div class="thumb-label-item mortgage">

                                    <!-- Project Description -->
                                    <p>
                                        Creditos Hipotecarios
                                    </p>


                                    <!-- //Project Description// -->


                                </div>
                                <!-- //Item// -->
                                <div class="thumb-label-item car">

                                    <!-- Project Description -->
                                    <p>
                                        Creditos Vehicular
                                    </p>


                                    <!-- //Project Description// -->


                                </div>
                                <!-- //Item// -->
                                <div class="thumb-label-item retirement">

                                    <!-- Project Description -->
                                    <p>
                                        Retiro de Haberes
                                    </p>


                                    <!-- //Project Description// -->


                                </div>
                                <!-- //Item// -->


                            </div>
                    </div>

                    </div>
                </div>
            </div>
        </div><!--.content-wrapper end -->


        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection