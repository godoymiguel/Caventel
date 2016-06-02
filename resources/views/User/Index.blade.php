@extends('template.mainUser')

@section('title', 'CAVENTEL -')

@section('content')

<div id="wrapper"  >

    <div class="top_wrapper">
        @include('template.Partials.divTopUser')
        <div class="rev-slider-full">
            <div class="rev-slider-banner-full  rev-slider-full">
                <ul>


                    <li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
                        <img src="{{ asset('images/estacion-barnitas-101.jpg')}}"  alt="rev-full1" data-fullwidthcentering="on">
                    </li>


                    <li  data-transition="slideleft" data-slotamount="14">
                        <img src="{{ asset('images/pico.jpg')}}" alt="Rev Full">
                    </li>

                    <li  data-transition="slideleft" data-slotamount="14">
                        <img src="{{ asset('images/virgen.jpg')}}" alt="Rev Full">
                    </li>

                    <li  data-transition="slideleft" data-slotamount="14">
                        <img src="{{ asset('images/barinitas.jpg')}}" alt="Rev Full">
                    </li>

                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
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

        <div class="section-content top-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="content-box content-style4 medium"
                             data-animtype="fadeIn"
                             data-animrepeat="0"
                             data-animspeed="1s"
                             data-animdelay="0.2s"
                        >
                            <h4 class="h4-body-title">
                                <i class="icon-notebook-streamline"></i>
                                Estatutos
                            </h4>
                            <div class="content-box-text">
                                Estatutos Internos Vigentes de la Caja de Ahorro Venezolana de Telefericos
                                <div>
                                    <a href="{{ asset('pdf/ESTATUTOSCAVENTEL2014.pdf') }}" onclick="window.open(this.href); return false;"  class=" btn btn-sm">
                                        <span>Descargar</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <div class="content-box content-style4 medium"
                             data-animtype="fadeIn"
                             data-animrepeat="0"
                             data-animspeed="1s"
                             data-animdelay="0.2s"
                        >
                            <h4 class="h4-body-title">
                                <i class="icon-book-read-streamline"></i>
                                Ley de Cajas De Ahorros
                            </h4>
                            <div class="content-box-text">
                                Ley Vigente de Cajas de Ahorro, Fondos de Ahorro y Asociaciones Similares

                                <div>
                                    <a href="{{ asset('pdf/Sudeca.pdf') }}" target="_blank"  class=" btn btn-sm">
                                        <span>Descargar</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="content-box content-style4 medium"
                             data-animtype="fadeIn"
                             data-animrepeat="0"
                             data-animspeed="1s"
                             data-animdelay="0.2s"
                        >
                            <h4 class="h4-body-title">
                                <i class="icon-graph"></i>
                                Informe de Gestión
                            </h4>
                            <div class="content-box-text">
                                Estados Financieron del Ultimo Año de Cierre Fiscal
                                <div>
                                    <a href="{{ asset('pdf/IDG.pdf') }}" target="_blank"  class=" btn btn-sm">
                                        <span>Descargar</span>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-content bottom-body">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="message-box clearfix">

                            <a href="Asociado" class="btn btn-lg">Entra Aquí</a>

                            <div class="message-content">
                                <h4>¿Deseas ser Asociado de Caventel? Conoces los Requisitos Para formar Parte de Nosotros</h4>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="body-wrapper">

            <div class="section-content section-tabs section-px stones-bg white-text">
                <div class="tab-container">
                    <div class="section-tab-arrow">

                    </div>
                    <div class="section-etabs-container">
                        <ul class="section-etabs">
                            <li class="tab active">
                                <a href="#tabc1"> Noticias </a>
                            </li>
                            <li class="tab">
                                <a href="Noticias"> Otras Noticias </a>
                            </li>

                        </ul>

                    </div>

                    <div class="container">

                        <div class="tab-content">

                            <div id="tabc1">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 ">
                                        <div class="feature animated"
                                             data-animtype="fadeInUp"
                                             data-animrepeat="0"
                                             data-animspeed="1s"
                                             data-animdelay="0.4s">
                                            <div class="img-overlay">
                                                <img src="{{ asset('img/news/webpage.jpg') }}" alt="webpage">
                                            </div>
                                            <div class="feature-content">
                                                <h3 class="h3-body-title blog-title">
                                                    <a href="NuevaPagina">Nueva Página</a>
                                                </h3>
                                                <p>
                                                    Caventel Estrena Nueva Pagina[...]
                                                </p>
                                            </div>
                                            <div class="feature-details">
                                                <i class="icon-calendar"></i>
                                                <span>1 Mayo 2016</span>
                                                <span class="details-seperator"></span>
                                                <a href="NuevaPagina"><i class="icon-news"></i><span>Ver Más</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            </div>
                        </div>
                    </div>
                </div>
        </div>


            <div class="space-sep40"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                     data-animrepeat="0"
                     data-speed="1s"
                     data-delay="0.4s">
                    <h2 class="h2-section-title">Enlaces de Interés</h2>

                    <div class="i-section-title">
                        <i class="icon-display">
                        </i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="icon-content-list-container">

                        <li class="icon-content-single">

                            <div class="content-box  style5  animated "
                                 data-animtype="fadeIn"
                                 data-animrepeat="0"
                                 data-animspeed="1s"
                                 data-animdelay="0.2s"
                            >
                                <h4 class="h4-body-title">
                                    <strong>
                                        <a href="{{ url('http://www.sudeca.mefbp.gob.ve/') }}" target="_blank">
                                            SUDECA
                                        </a>
                                    </strong>

                                    <i class="icon-browser"></i>
                                </h4>
                                <div class="content-box-text">
                                    <p>
                                        Superintendencia de Cajas de Ahorro
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="icon-content-list-container">

                        <li class="icon-content-single">

                            <div class="content-box  style5  animated "
                                 data-animtype="fadeIn"
                                 data-animrepeat="0"
                                 data-animspeed="1s"
                                 data-animdelay="0.2s"
                            >
                                <h4 class="h4-body-title">
                                    <strong>
                                        <a href="{{ url('http://www.mintur.gob.ve/mintur/ventel/teleferico-de-merida-mukumbari/') }}" target="_blank">
                                            MUKUMBARÍ
                                        </a>
                                    </strong>

                                    <i class="icon-browser"></i>
                                </h4>
                                <div class="content-box-text">
                                    <p>
                                        Sistema Teleférico de Mérida - Venezuela
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="space-sep40"></div>
        </div>



    </div><!--.content-wrapper end -->
    @include('template.Partials.divFooterUser')
</div><!-- wrapper end -->

@endsection