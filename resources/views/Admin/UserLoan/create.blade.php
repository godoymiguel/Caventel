@extends('template.Partials.divAdmin')

@section('title','Prestamos de Asociados -')

@section('content')
    @include('template.Partials.ValidateError')
                <!-- Page content-->
        <div class="content-wrapper">
            <h3>Ingresar Prestamo
                <small>de Asociados</small>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open( array( 'route' => 'Admin.UserLoan.store') ) !!}
                            <!-- START panel-->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">Cedula del Asociado</label>
                                <input type="number" min="0" name="user_ci" class="form-control" placeholder="cedula 18123456", value="{{ old('user_ci') }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tipo de Prestamo</label>
                                <select name="typeLoan" class="form-control">
                                    <option value=" " >Seleccione </option>
                                    <option value="personal" {{ old('typeLoan') === "personal" ? 'selected': '' }}>Personal</option>
                                    <option value="guarantor" {{ old('typeLoan') === "guarantor" ? 'selected': '' }}>Con Fiador</option>
                                    <option value="mortgage" {{ old('typeLoan') === "mortagage" ? 'selected': '' }} >Hipotecario</option>
                                    <option value="vehicle" {{ old('typeLoan') === "vehicle" ? 'selected': '' }}>Vehicular</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tipo de Plazo</label>
                                <input type="number" min="12" max="300" step="12" name="term" value="{{old('term')}}" class="form-control" placeholder="12 meses, 36 meses, 60 meses">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Monto Otorgado</label>
                                <input type="number" min="0" step="any" pattern="[0-9]{1,10}[.][0-9]{2,}" name="amountAwarded" value="{{ old('amountAwarded') }}" class="form-control" placeholder="00.00 Recuerde Separar Decimales con punto(.)">
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="clearfix">

                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary fa-check"> Ingresar</button>
                                    <a type="button" href="{{ route('admin.index') }}" class="btn btn-danger m-t-10">
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
