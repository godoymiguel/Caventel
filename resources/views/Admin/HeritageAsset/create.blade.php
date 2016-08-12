@extends('template.Partials.divAdmin')

@section('title','Ingresar Haberes al Patrimonio -')

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
            <h3>Ingresar Aporte del Patrono
                <small>Haberes del Patrimonio</small>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open( array( 'route' => 'Admin.HeritageAsset.store') ) !!}
                            <!-- START panel-->
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label">Forma de Pago</label>
                                <select name="reason" class="form-control">
                                    <option value=" " >Seleccione Motivo </option>
                                    <option value="patron" >Aporte Patrono</option>
                                    <option value="special" >Aporte Especial</option>
                                    <option value="rental" >Alquiler</option>
                                    <option value="sale" >Venta</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Monto</label>
                                <input type="number" min="0" step="any" pattern="[0-9]{1,100}[.][0-9]{2,}" name="amount" class="form-control" placeholder="00.00 Recuerde Separar Decimales con punto(.)">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Forma de Pago</label>
                                <select name="payment" class="form-control">
                                    <option value=" " >Seleccione Forma de Pago </option>
                                    <option value="check" >Cheque</option>
                                    <option value="deposi" >Deposito</option>
                                    <option value="transfer" >Transferencia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Identificación de Forma de Pago</label>
                                <input type="text" name="payment_number" class="form-control" placeholder="Ingrese La referencia de la Forma de Pago">
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