@extends('template.Partials.divAdmin')

@section('title','Lista General de Haberes -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3>
        <a type="button" class="btn btn-primary pull-right" onclick="window.print();">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Capital en Patrimonio
        <small>Consulta de Capital en Haberes Registrados en CAVENTEL</small>
    </h3>

    <!-- START panel-->
    <div class="panel panel-default">
        <!-- START table-responsive-->
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Motivo</th>
                    <th>Cantidad (Bs)</th>
                    <th>Acciones</th>

                </tr>
                </thead>

                <tbody>
                @foreach($heritageAssets as $heritageAsset)
                    <tr>
                        <td>{{ $heritageAsset->id}}</td>
                        <td>
                            @if($heritageAsset->reason == 'patron' )
                                Aporte Patrono
                            @elseif($heritageAsset->reason == 'special')
                                Aporte Especial
                            @elseif($heritageAsset->reason == 'rental')
                                Alquiler
                            @else
                                Venta
                            @endif

                        </td>
                        <td>{{ number_format($heritageAsset->amount,2,".",",") }}</td>
                        <td>
                            {{--<a type="button" href="{{ route('Admin.user_profiles.edit', $heritageAsset->id) }}"
                               class="btn btn-sm btn-default" title="Editar Cuenta">
                                <em class="fa fa-pencil"></em>
                            </a>
                            <a type="button" href="{{ route('Admin.user_profiles.create', $heritageAsset->id) }}"
                               class="btn btn-sm btn-info" title="Crear Perfil Asociado">
                                <em class="fa fa-user"></em>
                            </a>--}}
                            <a type="button" class="btn btn-sm btn-success"
                               href="{{ route('Admin.HeritageAsset.show', $heritageAsset->id) }}" title="Ver Detalle">
                                <em class="fa fa-arrow-right"></em>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>
        <!-- END table-responsive-->
        <div class="panel-footer">
            <div class="row">
                <div class="col-lg-2">
                    {{-- {!! Form::open( array('route'=> 'Admin.users.index', 'method' => 'GET') ) !!}
                     <div class="input-group">
                         <input type="text" name="name" placeholder="Buscar Usuario" class="input-sm form-control">
                            <span class="input-group-btn" id="search">
                               <button type="submit" class="btn btn-sm btn-default">Buscar</button>
                            </span>
                     </div>
                     {!! Form::close() !!}--}}
                </div>
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <div class="input-group pull-right">
                        {!! $heritageAssets->render() !!}
                        <a href="{{ route('Admin.HeritageTotal.index') }}" type="button" class="btn btn-green btn-sm">Volver
                            a Listado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection