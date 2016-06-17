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

        <div class="content-wrapper hide-until-loading">
            <div class="body-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">


                            <!-- Blog Post -->
                            <div class="blog-post">

                                <div class="blog-post-type">
                                    <i class="icon-pen"> </i>
                                </div>

                                <div class="blog-span">
                                    <div class="blog-post-featured-img">
                                        <img src="{{ asset('img/news/' . $news->img) }}" alt="webPage"/>


                                    </div>
                                    <h2>
                                        {{ $news->title }}
                                    </h2>

                                    <div class="blog-post-body">
                                        {!! $news->body !!}


                                    </div>

                                    <div class="blog-post-details">

                                        <!-- Date -->
                                        <div class="blog-post-details-item blog-post-details-item-left icon-calendar">
                                            1 Mayo 2016
                                        </div>
                                        <!-- Read More -->
                                        <div class="blog-post-details-item blog-post-details-item-right">
                                            <a href="{{ route('user.news') }}">
                                                Volver a Noticias <i class="fa fa-chevron-right"></i>
                                            </a>
                                        </div>
                                        <!-- //Read More// -->


                                    </div>

                                </div>

                            </div>
                            <!-- //Blog Post// -->



                    </div>
                </div>
            </div>
        </div>





        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection