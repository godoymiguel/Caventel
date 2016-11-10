@extends('template.Partials.divAdmin')

@section('title','Retiro de Haberes al Patrimonio -')

@section('content')
    @include('template.Partials.ValidateError')

    <!-- Page content-->
    <div class="content-wrapper">
        <h3>Retiro
            <small>Haberes del Patrimonio</small>
        </h3>
        <div class="row">
            <div class="col-md-12">
            {!! Form::open( array( 'route' => 'Admin.HeritageAssetRetirement.store') ) !!}
            <!-- START panel-->
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Motivo Retiro</label>
                            <input type="text" name="reason" value="{{ old('reason') }}"
                                   class="form-control" placeholder="Ingrese El motivo del Retiro">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Monto</label>
                            <input type="number" min="0" step="any" pattern="[0-9]{1,100}[.][0-9]{2,}" name="amount"
                                   value="{{ old('amount') }}" class="form-control"
                                   placeholder="00.00 Recuerde Separar Decimales con punto(.)">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Banco De Retiro</label>
                            <select name="bank" class="form-control">
                                <option value=" ">Seleccione Banco de Retiro</option>
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