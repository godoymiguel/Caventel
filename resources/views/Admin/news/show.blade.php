@extends('template.Partials.divAdmin')

@section('title', 'Noticia - ')

@section('content')
    <div class="content-wrapper">
        <div class="row">

            <!-- Blog Content-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div style="text-align: center">
                            <img src="{{ asset('img/news/' . $news->img) }}" width="50%" align="middle">
                        </div>
                    </div>

                    <hr>
                    <div class="panel-heading">
                        <div class="bb">
                            <h2 class="text-lg">{{ $news->title }}</h2>
                            <p class="clearfix">
                              <span class="pull-left">
                                 <small class="mr-sm">Por: <a href="{{ route('Admin.users.show', $news->User->id) }}">{{ $news->User->name }}</a>
                                 </small>
                                 <small class="mr-sm">{{ $news->created_at->toFormattedDateString() }}</small>
                              </span>
                            </p>
                        </div>
                    </div>
                    <div class="panel-body text-md">
                        {!! $news->body !!}
                        <hr>
                        {{--}}
                        <div role="group" aria-label="..." class="btn-group">
                            <button type="button" class="btn btn-default">
                                <em class="fa fa-facebook text-muted"></em>
                            </button>
                            <button type="button" class="btn btn-default">
                                <em class="fa fa-twitter text-muted"></em>
                            </button>
                            <button type="button" class="btn btn-default">
                                <em class="fa fa-google-plus text-muted"></em>
                            </button>
                            <button type="button" class="btn btn-default">
                                <em class="fa fa-tumblr text-muted"></em>
                            </button>
                            <button type="button" class="btn btn-default">
                                <em class="fa fa-pinterest text-muted"></em>
                            </button>
                            <button type="button" class="btn btn-default">
                                <em class="fa fa-share-alt text-muted"></em>
                            </button>
                            </div>
                            --}}
                        <div class="pull-right">
                        <a href="{{ route('Admin.news.index') }}"  type="button" class="btn btn-green btn-sm">Volver a Noticias</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection