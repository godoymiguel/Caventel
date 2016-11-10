@extends('template.Partials.divAdmin')

@section('title','Ingresar Haberes -')

@section('content')
    @include('template.Partials.ValidateError')

                <!-- Page content-->
        <div class="content-wrapper">
            <h3>Ingresar Aporte Mensual
                <small>del Asociado a sus Haberes</small>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open( array( 'route' => 'Admin.UserAsset.store') ) !!}
                            <!-- START panel-->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <input type="hidden" name="reason" value="M">
                            <div class="form-group">
                                <label class="control-label">Porcentaje de Salario</label>
                                <input type="number" min="10" max= "30" step="5" name="monthly_contributions" value="{{ old('monthly_contributions',10) }}" class="form-control" placeholder="10,15,20...">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Forma de Pago</label>
                                <input type="text" name="payment" value="{{ old('payment','Nomina') }}" class="form-control" placeholder="Ingrese La referencia de la Forma de Pago" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Identificación de Forma de Pago</label>
                                <input type="text" name="payment_number"  value="{{ old('payment_number','Nomina') }}" class="form-control" placeholder="Ingrese La referencia de la Forma de Pago" disabled>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Banco De Pago</label>
                                <input type="text" name="bank" value="{{ old('bank','Nomina') }}" class="form-control" placeholder="Ingrese La referencia de la Forma de Pago" disabled>
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