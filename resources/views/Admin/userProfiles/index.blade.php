@extends('template.Partials.divAdmin')

@section('title','Nómina -')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">

        <h3><a type="button" class="btn btn-primary pull-right">
                <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
            Nómina de Empleados
            <small>Venezolana de Telefericos</small>
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
                                    <th>Cedula Asociado</th>
                                    <th>Ingreso Mensual Neto(Bs) </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $payRoll as $pay)
                                    <tr>
                                        <td>{{ $pay->user_ci }}</td>
                                        <td>{{ number_format($pay->salary ,2,".",",") }}</td>
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
                        <div class="row">
                            <div class="col-lg-2">
                                {!! Form::open( array('route'=> 'Admin.user_profiles.index', 'method' => 'GET') ) !!}
                                <div class="input-group">
                                    <input type="number" min="0" name="user_ci" placeholder="Buscar Cedula" class="input-sm form-control">
                                    <span class="input-group-btn" id="search">
                              <button type="submit" class="btn btn-sm btn-default">Buscar</button>
                           </span>
                                </div>
                                {!! Form::close() !!}
                            </div>
                            <div class="col-lg-8"></div>
                            <div class="col-lg-2">
                                <div class="input-group pull-right">
                                    {!! $payRoll->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END panel-->
            </div>
        </div>
    </div>


@endsection