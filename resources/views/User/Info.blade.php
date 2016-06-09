@extends('template.mainUser')

@section('title', 'Información de Afiliación -')

@section('content')
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

        <div class="content-wrapper hide-until-loading">
            <div class="body-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                             data-animrepeat="0"
                             data-speed="1s"
                             data-delay="0.4s">
                            <h2 class="h2-section-title">Asociados</h2>
                            <div class="i-section-title">
                                <i class="icon-clip">

                                </i>
                            </div>
                        </div>
                    </div>

                    <div class="space-sep20"></div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p align="justify">
                                Podrán ser asociados de la Caja de Ahorro, aquellos trabajadores activos o permanentes
                                que manifiesten por escrito su voluntad de participar en él y que estén inscritos en la
                                nómina de VENEZOLANA DE TELEFERICOS.
                            </p> <br>
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Requisitos:</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <ul class="icons-list file colored-list">
                                <li>
                                    Copia de la Cedula de Identidad (vigente).
                                </li>
                            </ul>
                            <ul class="icons-list file colored-list">
                                <li>
                                    Copia del Último Vauche de Pago.
                                </li>
                            </ul>
                            <ul class="icons-list file colored-list">
                                <li>
                                    LLenar Planilla de Afiliación.
                                </li>
                            </ul>
                            <div class="space-sep20"></div>
                            <div>
                                <a href="{{ asset('pdf/IDG.pdf') }}" target="_blank"  class=" btn btn-sm">
                                    <span>Ver Planilla</span>
                                </a>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-6">
                            <div class="cycle-slideshow frame1">
                                <!-- slider item -->
                                <div class="slider-img">
                                    <img src="{{asset('img/media/info.jpg')}}" alt="about1.jpg"/>
                                </div>
                                <!-- slider item -->
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12">
                            <div class="space-sep20"></div>

                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Se pierde la condición de asociado</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <ul class="icons-list remove colored-list">
                                <li>
                                    Por la terminación de la relación de trabajo existente entre el trabajador y el
                                    patrono, salvo que se produzca por jubilación o pensión del organismo donde haya
                                    prestado sus servicios, en cuyo caso el asociado continuará con la condición de
                                    asociado, efectuando el aporte respectivo.
                                </li>
                            </ul>
                            <ul class="icons-list remove colored-list">
                                <li>
                                    Por
                                    separación voluntaria.
                                </li>
                            </ul>
                            <ul class="icons-list remove colored-list">
                                <li>
                                    Por fallecimiento del asociado.
                                </li>
                            </ul>
                            <ul class="icons-list remove colored-list">
                                <li>
                                    Por exclusión acordada en asamblea de asociados conforme a los Estatutos y
                                    a las disposiciones previstas en la Ley de Cajas de Ahorro, Fondos de Ahorro y
                                    Asociaciones de Ahorro Similares.
                                </li>
                            </ul>

                            <div class="space-sep20"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--.content-wrapper end -->

        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection