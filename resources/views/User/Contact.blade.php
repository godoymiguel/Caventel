@extends('template.mainUser')

@section('title', 'Contactenos -')

@section('ContactUser')
    <div id="wrapper">

        <div class="top_wrapper">
            @include('template.Partials.divTopUser')
            <div class="top-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="page-info">
                                <h1 class="h1-page-title">
                                    ¿Donde Estamos?
                                </h1>

                                <h2 class="h2-page-desc">
                                    Contáctanos
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
                            <h2 class="h2-section-title">Encuéntranos</h2>
                            <div class="i-section-title">
                                <i class="icon-map">

                                </i>
                            </div>
                        </div>
                    </div>

                    <div class="space-sep20"></div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Dirección</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <p align="justify">
                                Final de la calle 24 Rangel sector Las Heroínas del Municipio
                                Libertador edificio principal del Sistema Teleférico de Mérida Estación Barinitas.<br>
                                Mérida - Venezuela
                            </p> <br>
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Télefonos de Contacto</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <p align="justify">
                                (+58)274-1234567<br>
                                (+58)274-1234567<br>
                                (+58)274-1234567<br>
                                (+58)274-1234567<br>
                                (+58)274-1234567<br>
                            </p>

                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="cycle-slideshow frame1"
                                 data-cycle-slides="> .slider-img"
                                 data-cycle-swipe="true"
                                 data-cycle-prev=".cycle-prev"
                                 data-cycle-next=".cycle-next"
                                 data-cycle-overlay-fx-out="slideUp"
                                 data-cycle-overlay-fx-in="slideDown"
                                 data-cycle-timeout=0>
                                <!-- slider item -->
                                <div class="slider-img">

                                    <img src="{{asset('img/media/contact.jpg')}}" alt="about1.jpg"/>
                                </div>
                                <!-- //slider item// -->
                                <!-- slider item -->
                            </div>


                        </div>

                    </div>

                    <div class="space-sep40"></div>


                    <div class="row">

                        <div class="col-md-6 col-sm-6">

                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Correo Electrónico</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <p align="justify">
                                Información: Info@caventel.com <br>
                                Información: Info@caventel.com <br>
                                Información: Info@caventel.com <br>
                                Información: Info@caventel.com <br>
                                Información: Info@caventel.com <br>
                            </p>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Horario de Atención</h3>
                                <div class="title-seperator">
                                </div>
                            </div>
                            <p align="justify">
                                Lunes - Viernes: 8 am a 12 m y 2 pm a 6 pm
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.373950519224!2d-71.14207090733515!3d8.59170044009688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xa0c35c5b6cf59891!2sSistema+Telef%C3%A9rico+Mukumbar%C3%AD!5e0!3m2!1ses-419!2sve!4v1460561417736" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div><!--.content-wrapper end -->
        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection