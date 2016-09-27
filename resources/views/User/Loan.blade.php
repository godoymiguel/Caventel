@extends('template.mainUser')

@section('title', 'Prestamos -')

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
                <div class="section-content section-tabs full-tabs">
                    <div class="tab-container">
                        <div class="section-tab-arrow"></div>
                        <div class="section-etabs-container">
                            <ul class="section-etabs">
                                <li class="tab active">
                                    <a href="#tabc1">Personal</a>
                                </li>
                                <li class="tab">
                                    <a href="#tabc2">Hipotecario</a>
                                </li>
                                <li class="tab">
                                    <a href="#tabc3">Vehicular</a>
                                </li>
                                <li class="tab">
                                    <a href="#tabc4">Retiro de Haberes</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">

                            <div id="tabc1">
                                <div class="section-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <h2 class="h2-section-title">Prestamos Personales</h2>
                                                <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit
                                                    ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui.
                                                    Omittam suscipiantur ex vel,ex audiam intellegat gfIn labitur
                                                    discere eos, nam an feugiat voluptua.</h3>

                                                <h2 class="h2-section-title">Prestamos con Garantias</h2>
                                                <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit
                                                    ocurreret. Vix sumo ferri</h3>

                                                <h2 class="h2-section-title">Los Prestamos a:</h2>
                                                <h3 class="h3-section-info"><strong>Corto plazo</strong>, serán aquellos cuyo plazo no
                                                        sea mayor de
                                                        12 meses.</h3>
                                                <h3 class="h3-section-info"><strong>Mediano plazo</strong>, serán aquellos cuyo plazo se
                                                        encuentre entre 13 meses a 36 meses. </h3>
                                                <h3 class="h3-section-info"><strong>Largo plazo</strong>, serán
                                                        aquellos cuyo plazo se encuentren entre 37 meses a 60 meses. </h3>
                                            </div>


                                            <div class="col-md-6 col-sm-6">
                                                <div class="right-image-container">
                                                    <img src="{{ asset('img/media/loans1.jpg') }}"  alt="Prestamos" />
                                                </div>
                                                <br>
                                                <a type="button" href="{{ asset('pdf/ESTATUTOSCAVENTEL2014.pdf') }}"
                                                        onclick="window.open(this.href); return false;" class="btn btn-lg">Recaudo y Planilla de Requisitos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabc2">
                              <div class="section-content">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-md-6 col-sm-6">
                                              <h2 class="h2-section-title">Prestamos Personales</h2>
                                              <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit
                                                  ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui.
                                                  Omittam suscipiantur ex vel,ex audiam intellegat gfIn labitur
                                                  discere eos, nam an feugiat voluptua.</h3>

                                              <h2 class="h2-section-title">Prestamos con Garantias</h2>
                                              <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit
                                                  ocurreret. Vix sumo ferri</h3>

                                              <h2 class="h2-section-title">Los Prestamos a:</h2>
                                              <h3 class="h3-section-info"><strong>Corto plazo</strong>, serán aquellos cuyo plazo no
                                                      sea mayor de
                                                      12 meses.</h3>
                                              <h3 class="h3-section-info"><strong>Mediano plazo</strong>, serán aquellos cuyo plazo se
                                                      encuentre entre 13 meses a 36 meses. </h3>
                                              <h3 class="h3-section-info"><strong>Largo plazo</strong>, serán
                                                      aquellos cuyo plazo se encuentren entre 37 meses a 60 meses. </h3>
                                          </div>


                                          <div class="col-md-6 col-sm-6">
                                              <div class="right-image-container">
                                                  <img src="{{ asset('img/media/loans2.jpg') }}"  alt="Prestamos" />
                                              </div>
                                              <br>
                                              <a type="button" href="{{ asset('pdf/ESTATUTOSCAVENTEL2014.pdf') }}"
                                                      onclick="window.open(this.href); return false;" class="btn btn-lg">Recaudo y Planilla de Requisitos</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div id="tabc3">
                              <div class="section-content">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-md-6 col-sm-6">
                                              <h2 class="h2-section-title">Prestamos Personales</h2>
                                              <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit
                                                  ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui.
                                                  Omittam suscipiantur ex vel,ex audiam intellegat gfIn labitur
                                                  discere eos, nam an feugiat voluptua.</h3>

                                              <h2 class="h2-section-title">Prestamos con Garantias</h2>
                                              <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit
                                                  ocurreret. Vix sumo ferri</h3>

                                              <h2 class="h2-section-title">Los Prestamos a:</h2>
                                              <h3 class="h3-section-info"><strong>Corto plazo</strong>, serán aquellos cuyo plazo no
                                                      sea mayor de
                                                      12 meses.</h3>
                                              <h3 class="h3-section-info"><strong>Mediano plazo</strong>, serán aquellos cuyo plazo se
                                                      encuentre entre 13 meses a 36 meses. </h3>
                                              <h3 class="h3-section-info"><strong>Largo plazo</strong>, serán
                                                      aquellos cuyo plazo se encuentren entre 37 meses a 60 meses. </h3>
                                          </div>


                                          <div class="col-md-6 col-sm-6">
                                              <div class="right-image-container">
                                                  <img src="{{ asset('img/media/loans3.jpg') }}"  alt="Prestamos" />
                                              </div>
                                              <br>
                                              <a type="button" href="{{ asset('pdf/ESTATUTOSCAVENTEL2014.pdf') }}"
                                                      onclick="window.open(this.href); return false;" class="btn btn-lg">Recaudo y Planilla de Requisitos</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div id="tabc4">
                              <div class="section-content">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-md-6 col-sm-6">
                                              <h2 class="h2-section-title">Prestamos Personales</h2>
                                              <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit
                                                  ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui.
                                                  Omittam suscipiantur ex vel,ex audiam intellegat gfIn labitur
                                                  discere eos, nam an feugiat voluptua.</h3>

                                              <h2 class="h2-section-title">Prestamos con Garantias</h2>
                                              <h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit
                                                  ocurreret. Vix sumo ferri</h3>

                                              <h2 class="h2-section-title">Los Prestamos a:</h2>
                                              <h3 class="h3-section-info"><strong>Corto plazo</strong>, serán aquellos cuyo plazo no
                                                      sea mayor de
                                                      12 meses.</h3>
                                              <h3 class="h3-section-info"><strong>Mediano plazo</strong>, serán aquellos cuyo plazo se
                                                      encuentre entre 13 meses a 36 meses. </h3>
                                              <h3 class="h3-section-info"><strong>Largo plazo</strong>, serán
                                                      aquellos cuyo plazo se encuentren entre 37 meses a 60 meses. </h3>
                                          </div>


                                          <div class="col-md-6 col-sm-6">
                                              <div class="right-image-container">
                                                  <img src="{{ asset('img/media/loans4.jpg') }}"  alt="Prestamos" />
                                              </div>
                                              <br>
                                              <a type="button" href="{{ asset('pdf/ESTATUTOSCAVENTEL2014.pdf') }}"
                                                      onclick="window.open(this.href); return false;" class="btn btn-lg">Recaudo y Planilla de Requisitos</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--.content-wrapper end -->
        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection
