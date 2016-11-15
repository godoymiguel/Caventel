@extends('template.Partials.divAdmin')

@section('title', 'Reporte - ')

@section('content')
    <div class="content-wrapper">
        <div class="row">

            <!-- Blog Content-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body text-md">
                        {!! $data !!}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection