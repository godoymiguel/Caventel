@extends('template.Partials.divBlockCenter')

@section('title','Ingreso -')

@section('login')

                <p class="text-center pv">INICIAR SESIÓN.</p>
                <form role="form" data-parsley-validate="" novalidate="" class="mb-lg" method="post" action="{{url('/login')}}">
                    <div class="form-group has-feedback">
                        <input id="exampleInputEmail1" type="number" min= '0' placeholder="Cedula" autocomplete="off" required class="form-control">
                        <span class="fa fa-user form-control-feedback text-muted"></span>
                        <style>
                            input[type=number]::-webkit-outer-spin-button,
                            input[type=number]::-webkit-inner-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
                            }
                        </style>
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

@endsection