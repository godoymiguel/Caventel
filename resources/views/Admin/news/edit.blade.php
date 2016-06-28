@extends('template.Partials.divAdmin')

@section('title', 'Editar Noticia - ')

@section('content')
    @if(count($errors) > 0)
        <div role="alert" class="alert alert-danger alert-dismissible fade in">
            <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>¡ERROR!</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="content-wrapper">
        <div class="content-heading">Editar Noticia - {{ $news->title }}</div>
        <div class="row">
            <!-- Article Content-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open( array('route' => array('Admin.news.update', $news), 'method' => 'PUT', 'files' => true) ) !!}

                            <div class="form-group">
                                <input type="text" name="title" value="{{ $news->title }}" placeholder="Título de la Noticia"
                                       class="mb-lg form-control input-lg">
                                <textarea name="body"
                                          style="overflow:scroll; height:300px; width: 100%; max-width: 100%"
                                          class="form-control body-content" placeholder="Escribe Algo...">{{ $news->body }}</textarea>
                            </div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <label class="control-label">Imagen de la Noticia</label>
                                    <input type="file" name="img" data-classbutton="btn btn-default"
                                           data-classinput="form-control inline" class="form-control filestyle" value="{{ $news->img }}">
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