@extends('template.mainAdmin')

@section('lock')
    <div class="abs-center wd-xl">
        <!-- START panel-->
        <div class="p">
            <img src="{{ asset('img/user/1.png') }}" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle center-block">
        </div>
        <div class="panel widget b0">
            <div class="panel-body">
                <p class="text-center">Ingrese Clave Para Desbloquear Pantalla.</p>
                <form role="form">
                    <div class="form-group has-feedback">
                        <input id="exampleInputPassword1" type="password" placeholder="Contraseña" class="form-control">
                        <span class="fa fa-lock form-control-feedback text-muted"></span>
                    </div>
                    <div class="clearfix">
                        <div class="pull-left mt-sm">
                            <a href="recover" class="text-muted">
                                <small>Olvido Su Contraseña?</small>
                            </a>
                        </div>
                        <div class="pull-right"><a href="Admin" class="btn btn-sm btn-primary">Entrar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END panel-->
        <div class="p-lg text-center">
            <span>&copy;</span>
            <span>2016</span>
            <span>-</span>
            <span>CAVENTEL</span>
            <span>|</span>
            <span>ULA</span>
        </div>
    </div>
@endsection