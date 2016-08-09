@extends('template.Partials.divAdmin')

@section('title','Lista General de Haberes -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3>
        <a type="button" class="btn btn-primary pull-right">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Lista de Haberes Generales
        <small>Consulta de Haberes Registrados en CAVENTEL</small>
    </h3>

    <!-- START panel-->
    <div class="panel panel-default">
        <!-- START table-responsive-->
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Total</th>
                    <th>Bloqueado</th>
                    <th>Disponible</th>
                    <th>Acciones</th>

                </tr>
                </thead>

                <tbody>
                @foreach($userAssets as $userAsset)
                    <tr>
                        <td>{{ $userAsset->User->ci }}</td>
                        <td>{{ $userAsset->User->name }}</td>
                        <td>{{ $userAsset->User->last_name }}</td>
                        <td>{{ $userAsset->accumulated  }}</td>
                        <td>{{ $userAsset->bloked }}</td>
                        <td>{{ $userAsset->accumulated-$userAsset->bloked }}</td>
                        <td>
                            {{--<a type="button" href="{{ route('Admin.user_profiles.edit', $userAsset->id) }}"
                               class="btn btn-sm btn-default" title="Editar Cuenta">
                                <em class="fa fa-pencil"></em>
                            </a>
                            <a type="button" href="{{ route('Admin.user_profiles.create', $userAsset->id) }}"
                               class="btn btn-sm btn-info" title="Crear Perfil Asociado">
                                <em class="fa fa-user"></em>
                            </a>--}}
                            <a type="button" class="btn btn-sm btn-success"
                               href="{{ route('Admin.UserAsset.show', $userAsset->User->id) }}" title="Ver Usuario">
                                <em class="fa fa-arrow-right"></em>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Total Acumulado</th>
                                <th>Total Bloqueado</th>
                                <th>Total Disponible</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>Acomodar</td>
                                    <td>Mark</td>
                                    <td>Otto</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


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
                        {!! $userAssets->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection