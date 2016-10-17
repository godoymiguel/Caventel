@extends('template.Partials.divAdmin')

@section('title', 'Ingresar Noticia -')

@section('content')
    @include('template.Partials.ValidateError')

    <div class="content-wrapper">
        <div class="content-heading">Nueva Noticia</div>
        <div class="row">
            <!-- Article Content-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open( array('route' => 'Admin.news.store', 'method' => 'POST', 'files' => true) ) !!}
                        <div class="form-group">
                            <input type="text" name="title" value="{{ old('title') }}"
                                   placeholder="Título de la Noticia"
                                   class="mb-lg form-control input-lg">
                            <textarea name="body"
                                      style="overflow:scroll; height:300px; width: 100%; max-width: 100%"
                                      class="form-control body-content"
                                      placeholder="Escribe Algo...">{{ old('body') }}</textarea>
                        </div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <label class="control-label">Imagen de la Noticia</label>
                                <input type="file" name="img" data-classbutton="btn btn-default"
                                       data-classinput="form-control inline" class="form-control filestyle">
                            </div>
                            <div class="pull-right"><br>
                                <button type="submit" class="btn btn-primary m-t-10">
                                    <em class="fa fa-check fa-fw"></em>Guardar
                                </button>
                                <a type="button" href="{{ route('Admin.news.index') }}" class="btn btn-danger m-t-10">
                                    <em class="fa fa-close fa-fw"></em>Cancelar
                                </a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.body-content').trumbowyg({
            lang: 'es'
        });
    </script>
@endsection