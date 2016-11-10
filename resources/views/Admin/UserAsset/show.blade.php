@extends('template.Partials.divAdmin')

@section('title','Estado de Cuenta -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3><a type="button" class="btn btn-primary pull-right" onclick="window.print();">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Estado de Cuenta
        <small>{{$user->name}}</small>
    </h3>
    <div class="row">
        <div class="col-md-12">
            <!-- START panel-->
            <div class="panel panel-default">
                <div class="panel-body form-horizontal">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Cedula de Identidad</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{$user->ci}}</p>
                        </div>
                    
                        <label class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{$user->name}}</p>
                        </div>
                    
                        <label class="col-lg-2 control-label">Apellido</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{$user->last_name}}</p>
                        </div>
                    
                        <label class="col-lg-2 control-label">Correo Electronico</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">{{$user->email}}</p>
                        </div>
                    
                        <label class="col-lg-2 control-label">Tipo de Usuario</label>
                        <div class="col-lg-10">
                            @if($user->type == 'superadmin')
                                <p class="form-control-static">Super Administrador</p>
                            @elseif($user->type == 'admin')
                                <p class="form-control-static">Directivo</p>
                            @elseif($user->type == 'secretary')
                                <p class="form-control-static">Secretaria</p>
                            @else
                                <p class="form-control-static">Asociado</p>
                            @endif
                        </div>
                    {{--
                        <label class="col-lg-2 control-label">Ultimo Ingreso</label>
                        <div class="col-lg-10">
                            <p class="form-control-static">Acomodar</p>
                        </div>
                    --}}
                        <label class="col-lg-2 control-label">Teléfono de Contacto</label>
                        <div class="col-lg-10">
                            @if($user->UserProfile)
                                <p class="form-control-static">{{$user->UserProfile->phone}}</p>
                            @else
                                <p class="form-control-static">Sin Registro</p>
                            @endif
                        </div>
                    </div>


                    <legend>Detalle de Cuenta</legend>


                    <!-- START table-responsive-->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Motivo</th>
                                <th>Monto (Bs)</th>
                                <th>Metodo de Pago</th>
                                <th>Referencia de Pago</th>
                                <th>Acumulado (Bs)</th>
                                <th>Disponible (Bs)</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $userAsset as $asset)
                                <tr>
                                    <td>{{ $asset->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $asset->reason }}</td>
                                    <td>{{ number_format($asset->monthly_contributions,2,".",",") }}</td>
                                    <td>
                                        @if($asset->payment == 'check' )
                                            <p class="form-control-static">Cheque</p>
                                        @elseif($asset->payment == 'deposi')
                                            <p class="form-control-static">Deposito</p>
                                        @elseif($asset->payment == 'transfer')
                                            <p class="form-control-static">Transferencia</p>
                                        @elseif($asset->payment == 'Nomina')
                                            <p class="form-control-static">Descuento Nomina</p>
                                        @endif
                                    </td>
                                    <td>{{ $asset->payment_number }}</td>
                                    <td>{{ number_format($asset->accumulated,2,".",",") }}</td>
                                    <td>{{ number_format($asset->accumulated - $asset->bloked,2,".",",") }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        {!! $userAsset->render() !!}
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
                                <a href="{{ route('Admin.UserAsset.index') }}" type="button" class="btn btn-green btn-sm">Volver
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