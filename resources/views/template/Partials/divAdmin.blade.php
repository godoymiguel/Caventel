@extends('template.mainAdmin')

@section('divAdmin')
        <!-- top navbar-->
<header class="topnavbar-wrapper">
    @include('template.Partials.divAdminTop')
</header>
<!-- sidebar-->
@include('template.Partials.divAside');
<!-- Main section-->
<section>
    @yield('content')
</section>
<!-- Page footer-->
<footer>
    <span>
        &copy; 2016 Caja de Ahorro Venezola de Telefericos | Ingeniería de Sistemas - Universidad de Los Andes
    </span>
</footer>
@endsection