@extends('template.Partials.divAdmin')

@section('title','Lista General de Capital -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3>
        <a type="button" class="btn btn-primary pull-right" onclick="window.print();">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Capital en Patrimonio
        <small>Consulta de Capital Total Registrados en CAVENTEL</small>
    </h3>

    <!-- START panel-->
    <div class="panel panel-default">
        <!-- START table-responsive-->
        <div class="table-responsive">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Total Capital (Bs)</th>
                            <th>Total Haberes (Bs)</th>
                            <th>Intereses Generados (Bs)</th>
                            <th>Haberes en Inmuebles (Bs)</th>
                            <th>Retirado para Gastos (Bs)</th>
                            <th>Total Prestamos (Bs)</th>
                            <th>Capital Disponible (Bs)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="success">
                            <td>{{ number_format($totalCapital,2,".",",") }}</td>
                            <td>{{ number_format($totalAsset,2,".",",") }}</td>
                            <td>{{ number_format($interest,2,".",",") }}</td>
                            <td>{{ number_format($totalProperty,2,".",",") }}</td>
                            <td>{{ number_format($retirement,2,".",",") }}</td>
                            <td>{{ number_format($userLoan,2,".",",") }}</td>
                            <td>{{ number_format($available,2,".",",") }}</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END table-responsive-->

    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6">
            <!-- START widget-->
            <a href="{{ route('Admin.HeritageAsset.index') }}" class="btn btn-labeled">
                <div class="panel widget bg-success">
                    <div class="row row-table">
                        <div class="col-xs-4 text-center bg-success-dark pv-lg">
                            <em class="icon-wallet fa-3x"></em>
                        </div>

                        <div class="col-xs-8 pv-lg">
                            <div class="h1 m0 text-bold">Haberes</div>
                            <div class="text-uppercase">Consultar Patrimonio</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <!-- START widget-->
            <a href="{{ route('Admin.HeritageProperty.index') }}" class="btn btn-labeled">
                <div class="panel widget bg-warning">
                    <div class="row row-table">
                        <div class="col-xs-4 text-center bg-warning-dark pv-lg">
                            <em class="icon-docs fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h1 m0 text-bold">Inmuebles</div>
                            <div class="text-uppercase">Consultar Patrimonio</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-12">
            <!-- START widget-->
            <a href="{{ route('Admin.HeritageAssetRetirement.index') }}" class="btn btn-labeled">
                <div class="panel widget bg-danger">
                    <div class="row row-table">
                        <div class="col-xs-4 text-center bg-danger-dark pv-lg">
                            <em class="icon-calculator fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h1 m0 text-bold">Retiros</div>
                            <div class="text-uppercase">Consultar Patrimonio</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
