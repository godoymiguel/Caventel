@extends('template.Partials.divAdmin')

@section('title','Estado de Cuenta -')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">

        <h3><a type="button" class="btn btn-primary pull-right">
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
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user->name}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Apellido</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user->last_name}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Correo Electronico</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user->email}}</p>
                            </div>
                        </div>
                        <div class="form-group">
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
                        </div>
                        <div class="form-group mb">
                            <label class="col-lg-2 control-label">Ultimo Ingreso</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">Acomodar</p>
                            </div>
                        </div>
                        <div class="form-group">
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
                                    <th>Fecha de Inicio</th>
                                    <th>Monto Otrogado (Bs)</th>
                                    <th>Tipo de Prestamo</th>
                                    <th>Cuotas (Meses)</th>
                                    <th>Monto Mensual(Bs)</th>
                                    <th>Monto Cancelado (Bs)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $userLoan as $loan)
                                    <tr>
                                        <td>{{ $loan->dateLoan }}</td>
                                        <td>{{ number_format($loan->amountAwarded,2,".",",") }}</td>
                                        <td>
                                            @if($loan->typeLoan == 'personal' )
                                                <p class="form-control-static">Personal</p>
                                            @elseif($loan->typeLoan == 'guarantor')
                                                <p class="form-control-static">Con Fiadores</p>
                                            @elseif($loan->typeLoan == 'mortgage')
                                                <p class="form-control-static">Hipotecario</p>
                                            @else
                                                <p class="form-control-static">Vehicular</p>
                                            @endif
                                        </td>
                                        <td>{{ $loan->term }}</td>
                                        <td>{{ number_format($loan->amountFee + $loan->interest,2,".",",") }}</td>
                                        <td>{{ number_format($loan->canceled,2,".",",") }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pull-right">
                            {!! $userLoan->render() !!}
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