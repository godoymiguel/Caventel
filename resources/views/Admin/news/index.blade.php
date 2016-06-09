@extends('template.Partials.divAdmin')

@section('title', 'Noticias -')

@section('content')
    <div class="content-wrapper">
        <div class="content-heading">Noticias Actuales</div>
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
                                    <strong>Usuario</strong>
                                </th>
                                <th>
                                    <strong>Cuerpo</strong>
                                </th>
                                <th style="width:130px" class="text-right">
                                    <strong>Actions</strong>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $item )
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->created_add }}</td>
                                <td><a href="">Jack Jordan</a>
                                </td>
                                <td>{{ $item->boddy }}</td>
                                <td class="text-right">
                                    <button type="button" class="btn btn-sm btn-default">
                                        <em class="fa fa-pencil"></em>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success">
                                        <em class="fa fa-check"></em>
                                    </button>
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
                    <div class="input-group">
                        <input type="text" placeholder="Buscar Noticia" class="input-sm form-control">
                           <span class="input-group-btn">
                              <button type="button" class="btn btn-sm btn-default">Buscar</button>
                           </span>
                    </div>
                </div>
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <div class="input-group pull-right">
                        {!! $news->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection