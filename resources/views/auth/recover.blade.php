@extends('template.Partials.divBlockCenter')

@section('title','Recuperar Ingreso -')

@section('recover')
    <p class="text-center pv">Restablecimiento de Contraseña</p>
    <form role="form">
        <p class="text-center">Ingresa tu correo electrónico para recibir instrucciones sobre cómo restablecer su contraseña</p>
        <div class="form-group has-feedback">
            <label for="resetInputEmail1" class="text-muted">Correo Electrónico</label>
            <input id="resetInputEmail1" type="email" placeholder="Ingrese Correo" autocomplete="off" class="form-control">
            <span class="fa fa-envelope form-control-feedback text-muted"></span>
        </div>
        <button type="submit" class="btn btn-danger btn-block">Recuperar</button>
    </form>
@endsection