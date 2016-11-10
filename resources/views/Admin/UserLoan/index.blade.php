@extends('template.Partials.divAdmin')

@section('title','Prestamos de Asociados -')

@section('content')
        <!-- Page content-->
<div class="content-wrapper">

    <h3>
        <a type="button" class="btn btn-primary pull-right" onclick="window.print();">
            <em class="fa fa-print fa-fw mr-sm"></em>Imprimir</a>
        Prestamos de Asociados
        <small>Consulta General Prestamos Registrados</small>
    </h3>

    <!-- START panel-->
    <div class="panel panel-default">
        <!-- START table-responsive-->
        <div id="widget" class="table-responsive widget">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Fecha de Prestamo</th>
                    <th>Cedula Asociado</th>
                    <th>Tipo de Prestamo</th>
                    <th>Monto Otorgado (Bs)</th>
                    <th>Monto Cancelado (Bs)</th>
                    <th>Acciones</th>

                </tr>
                </thead>

                <tbody>
                @foreach($userLoans as $loan)
                    <tr>
                        <td>{{ $loan->id}}</td>
                        <td>{{ $loan->dateLoan}}</td>
                        <td>{{ $loan->User->ci}}</td>
                        <td>{{ $loan->typeLoan }}</td>
                        <td>{{ number_format($loan->amountAwarded,2,".",",") }}</td>
                        <td>{{ number_format($loan->canceled,2,".",",") }}</td>
                        <td>
                            <a type="button" class="btn btn-sm btn-default"
                               href="{{ route('Admin.loanPayment.create', $loan->id) }}" title="Pagar Cuota">
                                <em class="fa fa-money"></em>
                            </a>
                            <a type="button" class="btn btn-sm btn-info"
                               href="{{ route('Admin.loanPayment.show', $loan->id) }}" title="Ver Pagos">
                                <em class="fa fa-exchange"></em>
                            </a>
                            <a type="button" class="btn btn-sm btn-success"
                               href="{{ route('Admin.UserLoan.show', $loan->User->id) }}" title="Ver Detalle">
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
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                    <div class="input-group pull-right">
                        {!! $userLoans->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
        $(function() { 
            $("#btnSave").click(function() { 
                html2canvas($("#widget"), {
                    onrendered: function(canvas) {
                        theCanvas = canvas;
                        document.body.appendChild(canvas);

                        // Convert and download as image 
                        Canvas2Image.saveAsPNG(canvas); 
                        $("#img-out").append(canvas);
                        // Clean up 
                        //document.body.removeChild(canvas);
                    }
                });
            });
        }); 
    </script>
@endsection