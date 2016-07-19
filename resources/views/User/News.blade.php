@extends('template.mainUser')

@section('title', 'Noticias -')

@section('content')
    <div id="wrapper">

        <div class="top_wrapper">
            @include('template.Partials.divTopUser')
            <div class="top-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="page-info">
                                <h1 class="h1-page-title">
                                    Noticias
                                </h1>

                                <h2 class="h2-page-desc">
                                    Lo Más Reciente
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--.top wrapper end -->

        <div class="loading-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>

        <div class="body-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        {{--
                        CAVENTEL Tiene Nueva Página Web
                        La Caja de Ahorro Venezolana de Teleféricos tiene nueva página web donde sus asociados podran gestionar sus productos y beneficios desde cualquier computador con acceso a internet
                        --}}
                        @foreach($news as $item)
                                <!-- News Post -->
                        <div class="blog-post">

                            <div class="blog-span">
                                <div class="blog-post-featured-img">
                                    <img src="{{ asset('img/news/'. $item->img) }}" height="500" alt="webPage"/>


                                </div>
                                <h2>
                                    <a href="{{ route('user.shownews', $item->id) }}">
                                        {{ $item->title }}
                                    </a>
                                </h2>

                                <div class="blog-post-body">
                                    {!! str_limit( strip_tags($item->body),500) !!}
                                </div>

                                <div class="blog-post-details">

                                    <!-- Date -->
                                    <div class="blog-post-details-item blog-post-details-item-left icon-calendar">
                                        {{ $item->created_at->toFormattedDateString() }}
                                    </div>


                                    <!-- Read More -->
                                    <div class="blog-post-details-item blog-post-details-item-right">
                                        <a href="{{ route('user.shownews', $item->id) }}">
                                            Leer Más <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                    <!-- //Read More// -->

                                </div>
                            </div>
                        </div>
                        <!-- News Post -->
                        @endforeach


                                <!-- Pagination -->
                        <div class="pagination-container">
                            <ul class="pagination">
                                {!! $news->render() !!}
                            </ul>
                        </div>    <!-- Pagination Ends -->


                    </div>


                    <div class="col-md-3 col-sm-3">
                        @include('template.Partials.NewsAside')
                    </div>


                </div>
            </div>
        </div>

        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection