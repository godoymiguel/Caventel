@extends('template.Partials.divAdmin')

@section('title','Ingresar Usuario -')

@section('content')
    @include('template.Partials.ValidateError')
    <!-- Page content-->
    <div class="content-wrapper">
        <h3>Registrar Nuevo Usuario
        </h3>
        <div class="row">
            <div class="col-md-12">
            {!! Form::open( array( 'route' => 'Admin.users.store') ) !!}
            <!-- START panel-->
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Cedula de Identidad *</label>
                            <input type="number" min="0" name="ci" value="{{ old('ci') }}" required
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nombre *</label>
                            <input type="text" name="name" required value="{{old('name')}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Apellido *</label>
                            <input type="text" name="last_name" required value="{{ old('last_name') }}"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Correo Electronico *</label>
                            <input type="text" name="email" value="{{ old('email') }}" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contraseña *</label>
                            <input id="id-password" type="password" name="password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Confirme Contraseña *</label>
                            <input type="password" name="confirmPassword" required data-parsley-equalto="#id-password"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tipo de Usuario* </label>
                            <select name="type" required class="form-control">
                                <option value=" "></option>
                                <option value="user" {{ old('type') === "user" ? 'selected': '' }}>Asociado</option>
                                <option value="secretary" {{ old('type') === "secretary" ? 'selected': '' }} >
                                    Secretaria
                                </option>
                                <option value="admin" {{ old('type') === "admin" ? 'selected': '' }} >Directivo</option>
                            </select>
                        </div>
                        <div class="required">* Campos Requeridos</div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">

                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary fa-check"> Regitrar</button>
                                <a type="button" href="{{ route('Admin.users.index') }}" class="btn btn-danger m-t-10">
                                    <em class="fa fa-close fa-fw"></em>Cancelar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END panel-->
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection