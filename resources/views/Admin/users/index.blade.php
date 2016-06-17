@extends('template.Partials.divAdmin')

@section('title','Lista de Usuarios -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3>Lista de Usuarios
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
                    <th>Consultar</th>

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
                                <div class="label label-purple">{{ $user->type }}</div>
                            @elseif($user->type == 'admin')
                                <div class="label label-danger">{{ $user->type }}</div>
                            @else
                                <div class="label label-green">{{ $user->type }}</div>
                            @endif
                        </td>
                        <td>Hoy</td>
                        <td><a href="" class="btn btn-info fa fa-arrow-right"></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <!-- END table-responsive-->
        <div class="panel-footer">
            <div class="row">
                <div class="col-lg-2">
                    <div class="input-group">
                        <input type="text" placeholder="Buscar Usuario" class="input-sm form-control">
                           <span class="input-group-btn">
                              <button type="button" class="btn btn-sm btn-default">Buscar</button>
                           </span>
                    </div>
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