@extends('template.Partials.divAdmin')

@section('title','Ingresar Usuario -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="Admin.users.store" data-parsley-validate="" novalidate="">
                <!-- START panel-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Registrar Nuevo Usuario</div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Correo Electronico *</label>
                            <input type="text" name="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contraseña *</label>
                            <input id="id-password" type="password" name="password" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Confirme Contraseña *</label>
                            <input type="password" name="confirmPassword" required data-parsley-equalto="#id-password" class="form-control">
                        </div>
                        <div class="required">* Campos Requeridos</div>
                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">

                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Regitrar</button>
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