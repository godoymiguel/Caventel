@extends('template.mainUser')

@section('title', 'Ingresar Noticia -')

@section('NewPageUser')
    <div id="wrapper">

        <div class="top_wrapper">
            @include('template.Partials.divTopUser')
            <div class="top-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="page-info">
                                <h1 class="h1-page-title">
                                    Noticias
                                </h1>

                                <h2 class="h2-page-desc">
                                    Lo Más Reciente
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

                            <form action="{{ route('Admin.news.store') }}" class="form-wrapper" method="post" enctype="multipart/form-data" role="form" novalidate>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="title">
                                                Titulo
                                            </label>
                                            <input type="text" id="title" name="title" class="form-control" data-errmsg="Titulo es Requerido"
                                                   minlength="2" placeholder="Titulo de la Noticia" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <label for=body">
                                                Cuerpo
                                            </label>
                                                <textarea id="body" name="body" class="form-control" data-errmsg="Campo Requerido"
                                                          placeholder="Cuerpo de la Noticia" rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label for="website">
                                                Ingresar Imagen
                                            </label>


                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 col-sm-2 offset2">
                                        <input type="submit" value="Agregar" class="button large" />
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>





            @include('template.Partials.divFooterUser')

        </div><!-- wrapper end -->

@endsection