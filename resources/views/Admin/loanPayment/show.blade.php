@extends('template.Partials.divAdmin')

@section('title','Pagos -')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">

        <h3><a type="button" class="btn btn-primary pull-right">
                <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
            Pagos Realizados
            <small>sobre Prestamo</small>
        </h3>
        <div class="row">
            <div class="col-md-12">
                <!-- START panel-->
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal">

                        <!-- START table-responsive-->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Cuota Cancelada</th>
                                    <th>Cuotas Restantes</th>
                                    <th>Fecha de Pago</th>
                                    <th>Monto Cancelado(Bs)</th>
                                    <th>Abono Capital(Bs)</th>
                                    <th>Intereses(Bs)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $loanPayment as $loan)
                                    <tr>
                                        <td>{{ $loan->canceledFee }}</td>
                                        <td>{{ $loan->remainingFee }}</td>
                                        <td>{{ $loan->datePayment }}</td>
                                        <td>{{ number_format($loan->canceled ,2,".",",") }}</td>
                                        <td>{{ number_format($loan->amortization ,2,".",",") }}</td>
                                        <td>{{ number_format($loan->interest ,2,".",",") }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pull-right">

                        </div>
                        <!-- END table-responsive-->
                    </div>

                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-right">
                                @if(\Auth::User()->type == 'user')
                                    <a href="{{ route('admin.index') }}" type="button" class="btn btn-green btn-sm">Volver
                                        a Inicio</a>
                                @else
                                    <a href="{{ route('Admin.UserLoan.index') }}" type="button" class="btn btn-green btn-sm">Volver
                                        a Listado</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END panel-->
            </div>
        </div>
    </div>


@endsection