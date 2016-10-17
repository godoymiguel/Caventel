@extends('template.Partials.divAdmin')

@section('title','Ingresar Propiedades al Patrimonio -')

@section('content')
    @include('template.Partials.ValidateError')

    <!-- Page content-->
    <div class="content-wrapper">
        <h3>Ingresar Registro de Propiedad
            <small>Capital Inmueble del Patrimonio</small>
        </h3>
        <div class="row">
            <div class="col-md-12">
            {!! Form::open( array( 'route' => 'Admin.HeritageProperty.store') ) !!}
            <!-- START panel-->
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Numero de Documento de Propiedad</label>
                            <input type="text" name="document_code" value="{{ old('document_code') }}"
                                   class="form-control" placeholder="Ingrese Numero de Documento">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nombre del Inmueble</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                   placeholder="Ingrese Numero de Documento">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Precio Valorado</label>
                            <input type="number" min="0" step="any" pattern="[0-9]{1,100}[.][0-9]{2,}" name="price"
                                   value="{{ old('price') }}" class="form-control"
                                   placeholder="00.00 Recuerde Separar Decimales con punto(.)">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Dirección</label>
                            <input type="text" name="address" value="{{ old('adress') }}" class="form-control"
                                   placeholder="Ingrese Numero de Documento">
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