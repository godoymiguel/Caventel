@extends('template.Partials.divAdmin')

@section('title','Prestamos de Asociados -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3>
        <a type="button" class="btn btn-primary pull-right">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Prestamos de Asociados
        <small>Consulta General Prestamos Registrados</small>
    </h3>

    <!-- START panel-->
    <div class="panel panel-default">
        <!-- START table-responsive-->
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Fecha de Cobro</th>
                    <th>Tipo de Prestamo</th>
                    <th>Monto Otorgado (Bs)</th>
                    <th>Monto Cancelado (Bs)</th>
                    <th>Acciones</th>

                </tr>
                </thead>

                <tbody>
                @foreach($userLoans as $loan)
                    <tr>
                        <td>{{ $loan->id}}</td>
                        <td>{{ $loan->date_loan}}</td>
                        <td>{{ $loan->type_loan }}</td>
                        <td>{{ $loan->amount_awarded }}</td>
                        <td>{{ $loan->amount_canceled }}</td>
                        <td>
                            {{--<a type="button" href="{{ route('Admin.user_profiles.edit', $heritageAsset->id) }}"
                               class="btn btn-sm btn-default" title="Editar Cuenta">
                                <em class="fa fa-pencil"></em>
                            </a>
                            <a type="button" href="{{ route('Admin.user_profiles.create', $heritageAsset->id) }}"
                               class="btn btn-sm btn-info" title="Crear Perfil Asociado">
                                <em class="fa fa-user"></em>
                            </a>--}}
                            <a type="button" class="btn btn-sm btn-success"
                               href="{{ route('Admin.HeritageProperty.show', $loan->id) }}" title="Ver Detalle">
                                <em class="fa fa-arrow-right"></em>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>
        <!-- END table-responsive-->
        <div class="panel-footer">
            <div class="row">
                <div class="col-lg-2">
                    {{-- {!! Form::open( array('route'=> 'Admin.users.index', 'method' => 'GET') ) !!}
                     <div class="input-group">
                         <input type="text" name="name" placeholder="Buscar Usuario" class="input-sm form-control">
                            <span class="input-group-btn" id="search">
                               <button type="submit" class="btn btn-sm btn-default">Buscar</button>
                            </span>
                     </div>
                     {!! Form::close() !!}--}}
                </div>
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <div class="input-group pull-right">
                        {!! $userLoans->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection