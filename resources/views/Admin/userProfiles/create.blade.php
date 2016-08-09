@extends('template.Partials.divAdmin')

@section('title','Crear Perfil de Usuario -')

@section('content')

    @if(count($errors) > 0)
        <div role="alert" class="alert alert-danger alert-dismissible fade in">
            <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>¡ERROR!</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <!-- Page content-->
        <div class="content-wrapper">
            <h3>Crear Perfil del Usuario {{ $users->name }} {{ $users->last_name}}
            </h3>
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open( array('route' => array('Admin.user_profiles.store', $users->id), 'files' => true) ) !!}
                            <!-- START panel-->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <legend>Datos Personales</legend>
                            <div class="form-group mb">
                                <label class="control-label">Fecha de Nacimiento</label>
                                <input type="date" name="birthdate'" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Sexo</label>
                                <div class="">
                                    <label class="radio-inline c-radio">
                                        <input id="inlineradio1" type="radio" name="sex" value="female">
                                        <span class="fa fa-circle"></span>Femenino</label>
                                    <label class="radio-inline c-radio">
                                        <input id="inlineradio2" type="radio" name="sex" value="male">
                                        <span class="fa fa-circle"></span>Masculino</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Teléfono de Contacto </label>
                                <input type="text" name="phone" class="form-control" placeholder="(0414)-1234567 (0274)-2134567">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Dirección </label>
                                <input type="text" name="address" class="form-control" placeholder="calle 24 Rangel sector Las Heroínas">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Foto Perfil</label>
                                <input type="file" name="avatar" data-classbutton="btn btn-default"
                                       data-classinput="form-control inline" class="form-control filestyle">
                            </div>
                            <legend>Contacto de Emergencia</legend>
                            <div class="form-group">
                                <label class="control-label">Nombre</label>
                                <input type="text" name="emergency_name" class="form-control" placeholder="Persona Cercana">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Teléfono</label>
                                <input type="text" name="emergency_phone" class="form-control" placeholder="(0414)-1234567 (0274)-2134567">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Dirección</label>
                                <input type="text" name="emergency_address" class="form-control" placeholder="calle 24 Rangel sector Las Heroínas">
                            </div>

                        </div>

                        <div class="panel-footer">
                            <div class="clearfix">

                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary fa-check"> Crear Perfil</button>
                                    @if(Auth::User()->type == 'user')
                                        <a type="button" href="{{ route('admin.index') }}"
                                           class="btn btn-danger m-t-10">
                                            <em class="fa fa-close fa-fw"></em>Cancelar
                                        </a>
                                    @else
                                        <a type="button" href="{{ route('Admin.users.index') }}"
                                           class="btn btn-danger m-t-10">
                                            <em class="fa fa-close fa-fw"></em>Cancelar
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END panel-->
                    {{ Form::close() }}
                </div>
            </div>
        </div>

@endsection