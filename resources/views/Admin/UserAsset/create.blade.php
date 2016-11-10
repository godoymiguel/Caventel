@extends('template.Partials.divAdmin')

@section('title','Ingresar Haberes -')

@section('content')
    @include('template.Partials.ValidateError')

                <!-- Page content-->
        <div class="content-wrapper">
            <h3>Ingresar Aporte Adcional
                <small>del Asociado a sus Haberes</small>
            </h3>
            <div class="row">
                <div class="col-md-12">
                    {!! Form::open( array( 'route' => 'Admin.UserAsset.store') ) !!}
                            <!-- START panel-->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <input type="hidden" name="reason" value="A">
                            <div class="form-group">
                                <label class="control-label">Monto</label>
                                <input type="number" min="0" step="any" pattern="[0-9]{1,10}[.][0-9]{2,}" name="monthly_contributions" value="{{ old('monthly_contributions') }}" class="form-control" placeholder="00.00 Recuerde Separar Decimales con punto(.)">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Forma de Pago</label>
                                <select name="payment" class="form-control">
                                    <option value=" " >Seleccione Forma de Pago </option>
                                    <option value="check" {{ old('payment') === "check" ? 'selected': '' }} >Cheque</option>
                                    <option value="deposi" {{ old('payment') === "deposit" ? 'selected': '' }}>Deposito</option>
                                    <option value="transfer" {{ old('payment') === "transfer" ? 'selected': '' }}>Transferencia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Identificación de Forma de Pago</label>
                                <input type="text" name="payment_number"  value="{{ old('payment_number') }}" class="form-control" placeholder="Ingrese La referencia de la Forma de Pago">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Banco De Pago</label>
                                <select name="bank" class="form-control">
                                    <option value=" ">Seleccione Banco de Pago</option>
                                    <option value="caventel" {{ old('bank') === "caventel" ? 'selected': '' }}>Caventel(cheque)</option>
                                    <option value="venezuela" {{ old('bank') === "venezuela" ? 'selected': '' }} >Venezuela
                                    </option>
                                    <option value="tesoro" {{ old('bank') === "tesoro" ? 'selected': '' }} >Tesoro
                                    </option>
                                </select>
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