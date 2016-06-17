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
                                    <td>{{ $item->created_at }}</td>
                                    <td><a href="{{ route('Admin.users.show', $item->User->id) }}">{{ $item->User->name }}</a>
                                    </td>
                                    <td>{!! $item->body !!}</td>
                                    <td class="text-right">
                                        <a type="button" href="{{ route('Admin.news.edit', $item->id) }}"
                                           class="btn btn-sm btn-default">
                                            <em class="fa fa-pencil"></em>
                                        </a>
                                        <a type="button" href="{{ route('Admin.news.destroy', $item->id) }}"
                                           class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro Desea Eliminar la Noticia?')">
                                            <em class="fa fa-trash"></em>
                                        </a>
                                        <a type="button" class="btn btn-sm btn-success" href="{{ route('Admin.news.show', $item->id) }}">
                                            <em class="fa fa-check"></em>
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
                    {!! Form::open( array('route'=> 'Admin.news.index', 'method' => 'GET') ) !!}
                        <div class="input-group">
                            <input type="text" name="title" placeholder="Buscar Noticia" class="input-sm form-control">
                           <span class="input-group-btn" id="search">
                              <button type="submit" class="btn btn-sm btn-default">Buscar</button>
                           </span>
                        </div>
                    {!! Form::close() !!}
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