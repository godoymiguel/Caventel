@extends('template.Partials.divAdmin')

@section('title', 'Reporte - ')

@section('content')
    <div class="content-wrapper">
        <h3><a type="button" class="btn btn-primary pull-right" onclick="window.print();">
                <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
                Reportes
        </h3>
        <div class="row">

            <!-- Blog Content-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body text-md">
                        {!! $data->body !!}
                        <hr>
                        
                        <div class="pull-right">
                        <a href="{{ route('Admin.reports.index') }}"  type="button" class="btn btn-green btn-sm">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection