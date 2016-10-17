@extends('template.Partials.divAdmin')

@section('title','Detalle de Movimiento de Capital -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3><a type="button" class="btn btn-primary pull-right">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Detalle de Movimiento
        <small>Capital</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
                <!-- START panel-->
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Fecha</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{ $heritageAsset->created_at->toFormattedDateString()}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Motivo</label>
                            <div class="col-lg-10">
                                @if($heritageAsset->reason == 'patron' )
                                    <p class="form-control-static">Aporte Patrono</p>
                                @elseif($heritageAsset->reason == 'special')
                                    <p class="form-control-static">Aporte Especial</p>
                                @elseif($heritageAsset->reason == 'rental')
                                    <p class="form-control-static">Alquiler</p>
                                @else
                                    <p class="form-control-static">Venta</p>
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Cantidad (Bs)</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{ number_format($heritageAsset->amount,2,".",",") }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Metodo de Pago</label>
                            <div class="col-lg-10">

                                @if($heritageAsset->payment == 'check' )
                                    <p class="form-control-static">Cheque</p>
                                @elseif($heritageAsset->payment == 'deposi')
                                    <p class="form-control-static">Deposito</p>
                                @elseif($heritageAsset->payment == 'transfer')
                                    <p class="form-control-static">Transferencia</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mb">
                            <label class="col-lg-2 control-label">Referencia de Pago</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{ $heritageAsset->payment_number }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Acumulado En Capital Con Este Movimiento (Bs)</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{ number_format($heritageAsset->accumulated,2,".",",") }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-right">
                                <a href="{{ route('Admin.HeritageAsset.index') }}" type="button" class="btn btn-green btn-sm">Volver
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