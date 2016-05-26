@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- --}}
@extends('template.Partials.divBlockCenter')

@section('title','Ingreso -')

@section('content')
    <style>
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            margin: 0;
        }
    </style>
    <p class="text-center pv">INICIAR SESIÓN.</p>
    <form role="form" data-parsley-validate="" novalidate="" class="mb-lg" method="POST"
          action="{{ url('login') }}">
        <div class="form-group has-feedback">
            <input id="exampleInputEmail1" type="number" min='0' placeholder="Cedula" autocomplete="off" required
                   class="form-control">
            <span class="fa fa-user form-control-feedback text-muted"></span>

        </div>
        <div class="form-group has-feedback">
            <input id="exampleInputPassword1" type="password" placeholder="Contraseña" required class="form-control">
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