@extends('template.mainUser')

@section('title', 'Noticias -')

@section('NewsUser')
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

                        <!-- News Post -->
                        <div class="blog-post">

                            <div class="blog-post-type">
                                <i class="icon-pen"> </i>
                            </div>

                            <div class="blog-span">
                                <div class="blog-post-featured-img">
                                    <img src="{{ asset('img/news/webpage.jpg') }}" alt="webPage"/>


                                </div>
                                <h2>
                                    <a href="NuevaPagina">
                                        CAVENTEL Tiene Nueva Página Web
                                    </a>
                                </h2>

                                <div class="blog-post-body">
                                    La Caja de Ahorro Venezolana de Teleféricos tiene nueva página web donde sus asociados podran gestionar sus productos y beneficios desde cualquier computador con acceso a internet
                                </div>

                                <div class="blog-post-details">

                                    <!-- Date -->
                                    <div class="blog-post-details-item blog-post-details-item-left icon-calendar">
                                        1 Mayo 2016
                                    </div>

                                    <!-- Tags -->
                                    <!--
                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags icon-files">
                                        <a href="#">
                                            Business
                                        </a> ,
                                        <a href="#">
                                            Investment
                                        </a> ,
                                        <a href="#">
                                            Freelancing
                                        </a>
                                    </div>
                                    -->
                                    <!-- //Tags// -->

                                    <!-- Comments --><!--
                                    <div
                                            class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last icon-comment">
                                        <a href="#">
                                            3 Comments
                                        </a>
                                    </div>
                                    <!-- //Comments// -->


                                    <!-- Read More -->
                                    <div class="blog-post-details-item blog-post-details-item-right">
                                        <a href="NuevaPagina">
                                            Leer Más <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div>
                                    <!-- //Read More// -->

                                </div>
                            </div>
                        </div>
                        <!-- News Post -->


                        <!-- Pagination -->
                        <div class="pagination-container">
                            <ul class="pagination">
                                <li><a href="#" class="prev" >&laquo;</a></li>
                                <li><a href="Noticias" class="current" > 1 </a></li>
                                <li><a href="#" class="next">&raquo;</a></li>
                            </ul>
                        </div>    <!-- Pagination Ends -->



                    </div>


                    <div class="col-md-3 col-sm-3">
                        <div class="sidebar">


                            <!-- Sidebar Block --><!--
                            <div class="sidebar-block">
                                <div class="sidebar-content tags blog-search">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="q" class="form-control blog-search-input text-input" placeholder="Search.."/>
                                                    <span class="input-group-addon">
                                                        <button class="blog-search-button icon-search ">
                                                        </button>
                                                    </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Sidebar Block -->


                            <!-- Sidebar Block --><!--
                            <div class="sidebar-block">
                                <h3 class="h3-sidebar-title sidebar-title">
                                    tags
                                </h3>

                                <div class="sidebar-content tags">
                                    <a href="#">HTML5</a>
                                    <a href="#">CSS3</a>
                                    <a href="#">jQuery</a>
                                    <a href="#">JavaScript</a>
                                    <a href="#">WordPress</a>
                                    <a href="#">PHP</a>
                                    <a href="#">CSS</a>
                                    <a href="#">Social Media</a>
                                    <a href="#">HTML</a>
                                </div>
                            </div>
                            <!-- Sidebar Block -->


                            <!-- Sidebar Block -->
                            <div class="sidebar-block">
                                <h3 class="h3-sidebar-title sidebar-title">
                                    Noticias Recientes
                                </h3>

                                <div class="sidebar-content">
                                    <ul class="posts-list">
                                        <li>
                                            <div class="posts-list-thumbnail">
                                                <img src="{{ asset('img/news/webpage.jpg') }}" alt="webPage" width="54px" height="54px"/>
                                            </div>
                                            <div class="posts-list-content">
                                                <a href="NuevaPagina" class="posts-list-title">Nueva Página</a>
                                                        <span class="posts-list-meta">
                                                            1 Mayo 2016
                                                        </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Block -->
                        </div>
                    </div>


                </div>
            </div>
        </div>

        @include('template.Partials.divFooterUser')

    </div><!-- wrapper end -->

@endsection