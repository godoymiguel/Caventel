@extends('template.Partials.divAdmin')

@section('title','Detalle del Registro del Inmueble -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3><a type="button" class="btn btn-primary pull-right" onclick="window.print();">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Detalle del Registro
        <small>Inmueble {{ $heritageProperty->name }}</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
            <!-- START panel-->
            <div class="panel panel-default">
                <div class="panel-body form-horizontal">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Fecha</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{ $heritageProperty->created_at->toFormattedDateString()}}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Numero de Documento de Propiedad</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{ $heritageProperty->document_code }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Notaria y Numero de Registro</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{ $heritageProperty->notary }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Ficha Catastral</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{ $heritageProperty->recordCard }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{ $heritageProperty->name }}</p>
                        </div>
                    </div>
                    <div class="form-group mb">
                        <label class="col-lg-2 control-label">Valor del Inmueble (Bs)</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{ number_format($heritageProperty->price,2,".",",") }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Dirección</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{ $heritageProperty->address }}</p>
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="clearfix">
                        <div class="pull-right">
                            <a href="{{ route('Admin.HeritageProperty.index') }}" type="button" class="btn btn-green btn-sm">Volver
                                a Listado</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END panel-->
        </div>
    </div>
</div>


@endsection