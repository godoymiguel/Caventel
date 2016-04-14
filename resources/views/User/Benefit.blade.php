@extends('template.mainUser')

@section('title', 'Beneficios -')

@section('BenefitUser')
    <div id="wrapper">

        <div class="top_wrapper">
            @include('template.Partials.divTopUser')
            <div class="top-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="page-info">
                                <h1 class="h1-page-title">
                                    ¿Beneficios?
                                </h1>

                                <h2 class="h2-page-desc">
                                    Obten Los Mejores Beneficios Socio-Ecónomicos
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



        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection