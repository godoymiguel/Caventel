@extends('template.mainUser')

@section('title', 'Información de Afiliación -')

@section('InfoUser')
    <div id="wrapper">

        <div class="top_wrapper">
            @include('template.Partials.divTopUser')
            <div class="top-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="page-info">
                                <h1 class="h1-page-title">
                                    Afiliación
                                </h1>

                                <h2 class="h2-page-desc">
                                    Se Parte De Nosotros
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