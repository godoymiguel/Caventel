@extends('template.Partials.divBlockCenter')

@section('title','Ingreso -')

@section('content')
    <p class="text-center pv">INICIAR SESIÓN.</p>
    <form role="form" data-parsley-validate="" novalidate="" class="mb-lg" method="POST"
          action="{{ url('/login') }}">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
            <input id="email" type="email" name="email" placeholder="Correo Electrónico" autocomplete="off" required
                   class="form-control">
            <span class="fa fa-envelope form-control-feedback text-muted"></span>

        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" name="password" placeholder="Contraseña" required class="form-control">
            <span class="fa fa-lock form-control-feedback text-muted"></span>
        </div>
        <div class="clearfix">
            <div class="checkbox c-checkbox pull-left mt0">
                <label>
                    <input type="checkbox" value="" name="remember">
                    <span class="fa fa-check"></span>Recordar</label>
            </div>
            <div class="pull-right"><a href="recover" class="text-muted">¿Olvido su contraseña?</a>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary mt-lg">Ingresar</button>
    </form>
    <p class="pt-lg text-center">¿No estas Registrado?</p><a href="Asociado" class="btn btn-block btn-default">Registrate</a>

@endsection
