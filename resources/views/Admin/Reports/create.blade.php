@extends('template.Partials.divAdmin')

@section('title', 'Reporte-')

@section('content')
    @include('template.Partials.ValidateError')

    <div class="content-wrapper">
        <div class="content-heading">Reportes CAVENTEL</div>
        <div class="row">
            <!-- Article Content-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open( array('route' => 'Admin.reports.store', 'method' => 'POST', 'files' => true) ) !!}
                        <div class="form-group">
                           <input type="text" name="title" value="{{ old('title') }}"
                                   placeholder="Título del Reporte"
                                   class="mb-lg form-control input-lg">
                        </div>
                        <div class="form-group">                                                     
                            <textarea id='edit' name="body"
                                      style="overflow:scroll; height:500px; width: 100%; max-width: 100%"
                                      class="form-control body-content ckeditor"
                                      placeholder="Escribe El Reporte...">{{ old('body') }}</textarea>
                        </div>

                        
                        <div class="clearfix">
                        
                            <div class="pull-right"><br>
                                <button type="submit" class="btn btn-primary m-t-10">
                                    <em class="fa fa-check fa-fw"></em>Guardar
                                </button>
                                <a type="button" href="{{ route('Admin.reports.index') }}" class="btn btn-danger m-t-10">
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
    <!-- CKEDITOR -->
    <script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
@endsection