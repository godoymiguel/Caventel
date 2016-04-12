@extends('template.mainUser')

@section('title', 'Nosotros -')

@section('AboutUser')
    <div id="wrapper">

        <div class="top_wrapper">
            @include('template.Partials.divTopUser')
            <div class="top-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="page-info">
                                <h1 class="h1-page-title">
                                    ¿Quienes Somos?
                                </h1>

                                <h2 class="h2-page-desc">
                                    Conoce Las Razones Que Nos Mueven
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
                            <h2 class="h2-section-title">Sobre Nosotros</h2>
                            <div class="i-section-title">
                                <i class="icon-users">

                                </i>
                            </div>
                        </div>
                    </div>

                    <div class="space-sep20"></div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p align="justify">
                                La Caja De Ahorro Venezolana De Teleféricos, (CAVENTEL) es una Asociación Civil sin
                                fines de lucro, constituida por los trabajadores del Sistema Teleférico Mukumbarí, cuya
                                sede principal esta domiciliada en la ciudad de Mérida, Municipio Libertador del Estado
                                Mérida, cuyo funcionamiento se basa en todo aquello que esté expresamente permitido por
                                la Ley que regula la materia.
                            </p> <br>
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Misión</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <p align="justify">
                                Fomentar el ahorro sistemático de sus asociados como una política social ofreciendo
                                servicios que permitan satisfacer demandas y apoyo socio económico a sus afiliados, de
                                una manera equitativa y razonable en consonancia a lo establecido en los mecanismos
                                legales.
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
                                <div class="fa fa-chevron-right cycle-next"></div>
                                <div class="fa fa-chevron-left cycle-prev"></div>

                                <div class="cycle-pager"></div>

                                <!-- slider item -->
                                <div class="slider-img">

                                    <img src="{{asset('img/media/about1.jpg')}}" alt="about1.jpg"/>
                                </div>
                                <!-- //slider item// -->
                                <!-- slider item -->
                                <div class="slider-img">

                                    <img src="{{asset('img/media/about2.jpg')}}" alt="about2.jpg"/>
                                </div>
                                <!-- //slider item// -->
                            </div>


                        </div>

                    </div>

                    <div class="space-sep40"></div>


                    <div class="row">

                        <div class="col-md-6 col-sm-6">

                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Visión</h3>
                                <div class="title-seperator"></div>
                            </div>
                            <p align="justify">
                                Ser una organización cada vez más consolidada, que contribuye al fortalecimiento
                                financiero y tecnológico de la institución con un modelo de gestión que brinda apoyo al
                                desarrollo de quienes la integran, impulsando cambios sociales que permitan satisfacer
                                necesidades y mejoras en la calidad de vida, fortaleciendo así los valores de compromiso
                                y lealtad.
                            </p>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Objetivos</h3>
                                <div class="title-seperator">
                                </div>
                            </div>
                            <p align="justify">
                                + Estimular la formación de hábitos de economía y previsión social entre sus afiliados
                            </p>
                            <p align="justify">
                                + Conceder préstamos en beneficio exclusivo de sus asociados a bajo interés, incluyendo
                                los créditos hipotecarios
                            </p>
                            <p align="justify">
                                + Procurar para sus afiliados toda clase de beneficios socio-económicos, tales como:
                                montepío, mutuo auxilio, seguro colectivos de vida, cirugía, hospitalización y gastos
                                médicos, entre otros
                            </p>
                            <p align="justify">
                                + Velar por los intereses de sus asociados por todos los medios a su alcance
                            </p>
                            <p align="justify">
                                + Todo aquello que esté expresamente permitido por la Ley que regula la materia
                            </p>
                        </div>
                    </div>

                    <div class="space-sep40"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Nuestra Directiva</h3>
                                <div class="title-seperator"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row " >
                        <div class="col-md-3 col-sm-3 left" >
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ asset('img/user/1.png') }}" alt="A_Presidencia"/>


                                </div>
                                <div class="team-member-content">
                                    <h3 class="team-member-name h3-body-title">
                                        Carlos Rojas
                                    </h3>

                                    <div class="team-member-position">
                                        Presidente <br> Consejo de Administración
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 left">
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ asset('img/user/2.png') }}" alt="A_Tesoreria"/>
                                </div>
                                <div class="team-member-content">
                                    <h3 class="team-member-name h3-body-title">
                                        Dileiby Sanchez
                                    </h3>

                                    <div class="team-member-position">
                                        Tesorera <br> Consejo de Administración
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 left">
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ asset('img/user/2.png') }}" alt="A_Secretaria"/>
                                </div>
                                <div class="team-member-content">
                                    <h3 class="team-member-name h3-body-title">
                                        Ana Sanchez
                                    </h3>

                                    <div class="team-member-position">
                                        Secretaria <br> Consejo de Administración
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-3 left">
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ asset('img/user/1.png') }}" alt="V_Presidencia"/>
                                </div>
                                <div class="team-member-content">
                                    <h3 class="team-member-name h3-body-title">
                                        Wilmer Uzcategui
                                    </h3>

                                    <div class="team-member-position">
                                        Presidente <br> Consejo de Vigilancia
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 left">
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ asset('img/user/1.png') }}" alt="V_VicePresiencia"/>
                                </div>
                                <div class="team-member-content">
                                    <h3 class="team-member-name h3-body-title">
                                        Ely Bravo
                                    </h3>

                                    <div class="team-member-position">
                                        Vice-Presidente <br> Consejo de Vigilancia
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 left">
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ asset('img/user/1.png') }}" alt="V_Secretaria"/>
                                </div>
                                <div class="team-member-content">
                                    <h3 class="team-member-name h3-body-title">
                                        Richard Goffin
                                    </h3>

                                    <div class="team-member-position">
                                        Secretario <br> Consejo de Vigilancia
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-sep40"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title-block clearfix">
                                <h3 class="h3-body-title">Organigrama</h3>
                                <div class="title-seperator"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div >
                           <img src="{{asset('img/media/Organigrama.png')}}" alt="organigrama" width="100%"/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--.content-wrapper end -->
        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->


@endsection