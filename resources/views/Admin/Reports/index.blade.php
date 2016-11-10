@extends('template.Partials.divAdmin')

@section('title', 'Reportes -')

@section('content')
    <div class="content-wrapper">
        <div class="content-heading">Reportes</div>
        <div class="row">
            <!-- Article Content-->
            <div class="col-lg-12">
                <div class="panel">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <strong>Titulo</strong>
                                </th>
                                <th>
                                    <strong>Fecha</strong>
                                </th>
                                <th>
                                    <strong>Cuerpo</strong>
                                </th>
                                <th style="width:130px" class="text-right">
                                    <strong>Acción</strong>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reports as $item )
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->created_at->diffForHumans() }}</td>
                                    <td>{{ str_limit( strip_tags($item->body), 100) }}</td>
                                    <td class="text-right">
                                       {{-- <a type="button" href="{{ route('Admin.news.edit', $item->id) }}"
                                           class="btn btn-sm btn-default" title="Editar Noticia">
                                            <em class="fa fa-pencil"></em>
                                        </a>
                                        <a type="button" href="{{ route('Admin.news.destroy', $item->id) }}"
                                           class="btn btn-sm btn-danger" title="Eliminar Noticia" onclick="return confirm('¿Seguro Desea Eliminar la Noticia?')">
                                            <em class="fa fa-trash"></em>
                                        </a>--}}
                                        <a type="button" class="btn btn-sm btn-success" href="{{ route('Admin.reports.show', $item->id) }}" title="Ver Reporte">
                                            <em class="fa fa-arrow-right"></em>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-lg-2">
                    {!! Form::open( array('route'=> 'Admin.reports.index', 'method' => 'GET') ) !!}
                        <div class="input-group">
                            <input type="text" name="title" placeholder="Buscar Titulo del Reporte" class="input-sm form-control">
                           <span class="input-group-btn" id="search">
                              <button type="submit" class="btn btn-sm btn-default">Buscar</button>
                           </span>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <div class="input-group pull-right">
                        {!! $reports->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection