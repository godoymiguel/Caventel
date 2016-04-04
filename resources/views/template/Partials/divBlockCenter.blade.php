@extends('template.mainAdmin')

@section('divBlockCenter')
    <div class="block-center mt-xl wd-xl">
        <!-- START panel-->
        <div class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
                <a href="/">
                    <img src="{{ asset('img/ing_logosimbolo.png')}}" width="80%" alt="Image" class="block-center img-rounded">
                </a>
            </div>
            <div class="panel-body">
                @yield('recover')
                @yield('login')
            </div>
        </div>
        <!-- END panel-->
        <div class="p-lg text-center">
            <span>&copy;</span>
            <span>2016</span>
            <span>-</span>
            <span>CAVENTEL</span>
            <span>|</span>
            <span>ULA</span>
        </div>
    </div>
@endsection