@extends('template.Partials.divAdmin')

@section('title','Perfil de Usuario -')

@section('content')
        <!-- Page content-->
    <div class="content-wrapper">

        <h3><a type="button" class="btn btn-primary pull-right" onclick="window.print();">
                <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
            {{$user_profiles->name}}
            <small>Perfil de Usuario</small>
        </h3>
        <div class="row">
            <div class="col-lg-2">
                <!-- START widget-->
                <div class="panel widget">


                        @if($user_profiles->type == 'superadmin')
                        <div class="panel-body bg-purple text-center">
                            <img src="{{ asset('img/user/' . $user_profiles->UserProfile->avatar) }}" alt="Image" class="img-thumbnail img-circle thumb128">
                        </div>
                        @elseif($user_profiles->type == 'admin')
                        <div class="panel-body bg-danger text-center">
                            <img src="{{ asset('img/user/' . $user_profiles->UserProfile->avatar) }}" alt="Image" class="img-thumbnail img-circle thumb128">
                        </div>
                        @elseif($user_profiles->type == 'secretary')
                        <div class="panel-body bg-primary text-center">
                            <img src="{{ asset('img/user/' . $user_profiles->UserProfile->avatar) }}" alt="Image" class="img-thumbnail img-circle thumb128">
                        </div>
                        @else
                        <div class="panel-body bg-green text-center">
                            <img src="{{ asset('img/user/' . $user_profiles->UserProfile->avatar) }}" alt="Image" class="img-thumbnail img-circle thumb128">
                        </div>
                        @endif



                </div>
                <!-- END widget-->
            </div>
            <div class="col-md-12">
                        <!-- START panel-->
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal">
                        <legend>Datos Personales</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Cedula de Identidad</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->ci}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{ $user_profiles->name }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Apellido</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->last_name}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Correo Electronico</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->email}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Tipo de Usuario</label>
                            <div class="col-lg-10">
                                @if($user_profiles->type == 'superadmin')
                                    <p class="form-control-static">Super Administrador</p>
                                @elseif($user_profiles->type == 'admin')
                                    <p class="form-control-static">Directivo</p>
                                @elseif($user_profiles->type == 'secretary')
                                    <p class="form-control-static">Secretaria</p>
                                @else
                                        <p class="form-control-static">Asociado</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group mb">
                            <label class="col-lg-2 control-label">Fecha de Ingreso</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->created_at}}</p>
                            </div>
                        </div>
                        <div class="form-group mb">
                            <label class="col-lg-2 control-label">Fecha de Nacimiento</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->UserProfile->birthdate}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Sexo</label>
                            <div class="col-lg-10">
                                @if($user_profiles->UserProfile->sex == 'female')
                                    <p class="form-control-static">Femenino</p>
                                @else
                                    <p class="form-control-static">Masculino</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Teléfono de Contacto</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->UserProfile->phone}}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Dirección</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->UserProfile->address}}</p>
                            </div>
                        </div>


                        <legend>Contacto de Emergencia</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->UserProfile->emergency_name}}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Teléfono</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->UserProfile->emergency_phone}}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Dirección</label>
                            <div class="col-lg-10">
                                <p class="form-control-static">{{$user_profiles->UserProfile->emergency_address}}</p>
                            </div>
                        </div>

                    </div>

                    <div class="panel-footer">
                        <div class="clearfix">
                            <div class="pull-right">
                                @if(Auth::User()->type == 'user')
                                    <a href="{{ route('admin.index') }}"  type="button" class="btn btn-green btn-sm">Volver</a>
                                @else
                                    <a href="{{ route('Admin.users.index') }}"  type="button" class="btn btn-green btn-sm">Volver a Usuarios</a>
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