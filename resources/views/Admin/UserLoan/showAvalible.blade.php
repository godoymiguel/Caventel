@extends('template.Partials.divAdmin')

@section('title','Estado de Cuenta -')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">

        <h3><a type="button" class="btn btn-primary pull-right" onclick="window.print();">
                <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
            Préstamos Disponibles
            <small>{{Auth::user()->name}}</small>
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
                                    <th>Tipo de Prestamo</th>
                                    <th>Monto a Disponible</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Personal</td>
                                        <td>{{ number_format($loanAvalible,2,".",",") }}</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-default"
                                               href="{{ route('Admin.loanPayment.create', $loan->id) }}" title="Realizar Solicitud">
                                                <em class="fa fa-check"></em>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Con Fiador</td>
                                        <td>{{ number_format($loanAvalible,2,".",",") }}</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-default"
                                               href="{{ route('Admin.loanPayment.create', $loan->id) }}" title="Realizar Solicitud">
                                                <em class="fa fa-check"></em>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hipotecario</td>
                                        <td>{{ number_format($loanAvalible,2,".",",") }}</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-default"
                                               href="{{ route('Admin.loanPayment.create', $loan->id) }}" title="Realizar Solicitud">
                                                <em class="fa fa-check"></em>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vehicular</td>
                                        <td>{{ number_format($loanAvalible,2,".",",") }}</td>
                                        <td>
                                            <a type="button" class="btn btn-sm btn-default"
                                               href="{{ route('Admin.loanPayment.create', $loan->id) }}" title="Realizar Solicitud">
                                                <em class="fa fa-check"></em>
                                            </a>
                                        </td>
                                    </tr>
                               
                                </tbody>
                            </table>
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