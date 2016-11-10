@extends('template.Partials.divAdmin')

@section('title','Lista de Usuarios -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3>
        <a type="button" class="btn btn-primary pull-right" onclick="window.print();">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Lista de Usuarios
        <small>Consulta de Asociados Registrados en CAVENTEL</small>
    </h3>

    <!-- START panel-->
    <div class="panel panel-default">
        <!-- START table-responsive-->
        <div class="table-responsive">
            <table id="table-ext-1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Ultimo Ingreso</th>
                    <th>Acción</th>

                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->ci }}</td>
                        <td>
                            <div class="media">
                                <img src="{{ asset('img/user/1.png') }}" alt="Image" class="img-responsive img-circle">
                            </div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->type == 'superadmin')
                                <div class="label label-purple">Super Administrador</div>
                            @elseif($user->type == 'admin')
                                <div class="label label-danger">Directivo</div>
                            @elseif($user->type == 'secretary')
                                <div class="label bg-primary">Secretaria</div>
                            @else
                                <div class="label label-green">Asociado</div>
                            @endif
                        </td>
                        <td>Hoy</td>
                        <td>
                            <a type="button" href="{{ route('Admin.user_profiles.edit', $user->id) }}"
                               class="btn btn-sm btn-default" title="Editar Cuenta">
                                <em class="fa fa-pencil"></em>
                            </a>
                            <a type="button" href="{{ route('Admin.user_profiles.create', $user->id) }}"
                               class="btn btn-sm btn-info" title="Crear Perfil Asociado">
                                <em class="fa fa-user"></em>
                            </a>
                            <a type="button" class="btn btn-sm btn-success"
                               href="{{ route('Admin.user_profiles.show', $user->id) }}" title="Ver Usuario">
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
                    {!! Form::open( array('route'=> 'Admin.users.index', 'method' => 'GET') ) !!}
                    <div class="input-group">
                        <input type="text" name="name" placeholder="Buscar Usuario" class="input-sm form-control">
                           <span class="input-group-btn" id="search">
                              <button type="submit" class="btn btn-sm btn-default">Buscar</button>
                           </span>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <div class="input-group pull-right">
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection