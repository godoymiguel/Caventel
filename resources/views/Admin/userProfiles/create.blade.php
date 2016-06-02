@extends('template.Partials.divAdmin')

@section('title','Actualizar Perfil de Usuario -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">
    <h3>Actualizar Datos del Usuario
    </h3>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('Admin.user_profiles.store') }}" enctype="multipart/form-data" data-parsley-validate="" novalidate="">
                <!-- START panel-->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Cedula de Identidad </label>
                            <input type="number" name="ci" required class="form-control" disabled value="1">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nombre </label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Apellido </label>
                            <input type="text" name="last_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Correo Electronico </label>
                            <input type="text" name="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contraseña </label>
                            <input id="id-password" type="password" name="password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Confirme Contraseña </label>
                            <input type="password" name="confirmPassword" required data-parsley-equalto="#id-password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tipo de Usuario</label>
                            <select name="type" required class="form-control">
                                <option value=" " > </option>
                                <option value="user" >Asociado</option>
                                <option value="admin" >Directivo</option>
                            </select>
                        </div>
                        <div class="form-group mb">
                            <label class="control-label">Fecha de Nacimiento</label>
                                <div id="datetimepicker1" class="input-group date">
                                    <input type="text" name="birthdate'" class="form-control">
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                                </div>
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
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Dirección </label>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Foto Perfil</label>
                            <input type="file" name="avatar" data-classbutton="btn btn-default" data-classinput="form-control inline" class="form-control filestyle">
                        </div>

                    </div>

                    <div class="panel-footer">
                        <div class="clearfix">

                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END panel-->
            </form>
        </div>
    </div>
</div>

@endsection