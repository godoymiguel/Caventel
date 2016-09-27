@extends('template.Partials.divAdmin')

@section('title','Prestamos de Asociados -')

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
                                <input type="number" min="0" name="user_ci" class="form-control" placeholder="cedula 18123456">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tipo de Prestamo</label>
                                <select name="type_loan" class="form-control">
                                    <option value=" " >Seleccione </option>
                                    <option value="personal" >Personal</option>
                                    <option value="guarantor" >Con Fiador</option>
                                    <option value="mortgage" >Hipotecario</option>
                                    <option value="vehicle" >Vehicular</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tipo de Plazo</label>
                                <input type="number" min="12" max="300" step="12" name="term" class="form-control" placeholder="12 meses, 36 meses, 60 meses">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Fecha de Inicio de Prestamo</label>
                                <input type="date" name="date_loan" class="form-control" placeholder="Seleccione">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Monto Otorgado</label>
                                <input type="number" min="0" step="any" pattern="[0-9]{1,10}[.][0-9]{2,}" name="amount_awarded" class="form-control" placeholder="00.00 Recuerde Separar Decimales con punto(.)">
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
