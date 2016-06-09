<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="call-us top-bar-block">
                    <i class="icon-phone"></i>
                                    <span>
                                        Contactanos (+58)274-1234567
                                    </span>
                </div>
                <div class="mail-us top-bar-block">
                    <i class="icon-email"></i>
                                    <span>
                                        Correo Electrónico: info@caventel.com
                                    </span>
                </div>

            </div>
            <div class="col-sm-5">

                <!-- Search Box -->
                <div class="searchbox">
                    <form action="#" method="get">
                        <input type="text" class="searchbox-inputtext" id="searchbox-inputtext" name="s"
                               placeholder="Buscar..."/>
                        <label class="searchbox-icon" for="searchbox-inputtext"></label>
                        <input type="submit" class="searchbox-submit" value="Search"/>
                    </form>
                </div>
                <!-- //Search Box// -->
                <div class="social-icons">
                    <ul>
                        <li>
                            <a href="{{ url('https://www.facebook.com/') }}" target="_blank" class="social-media-icon facebook-icon"
                               data-original-title="facebook">facebook</a>
                        </li>
                        <li>
                            <a href="{{ url('https://twitter.com/') }}" target="_blank" class="social-media-icon twitter-icon"
                               data-original-title="twitter">twitter</a>
                        </li>
                        <li>
                            <a href="{{ url('https://plus.google.com/') }}" target="_blank" class="social-media-icon googleplus-icon"
                               data-original-title="googleplus">googleplus</a>
                        </li>
                        <li>
                            <a href="{{ url('https://www.instagram.com/') }}" target="_blank"
                               class="social-media-icon instagram-icon " data-original-title="instagram">instragram</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header id="header">
    <div class="container">

        <div class="row header">

            <!-- Logo -->
            <div class="col-xs-2 logo">
                <a href="{{ route('user.index') }}">
                    <img src="{{ asset('img/mainLogo.png') }}" alt="LogoCaventel"/>
                </a>
            </div>
            <!-- //Logo// -->


            <!-- Navigation File -->
            <div class="col-md-10">

                <!-- Mobile Button Menu -->
                <div class="mobile-menu-button">
                    <i class="fa fa-list-ul"></i>
                </div>
                <!-- //Mobile Button Menu// -->


                <nav>
                    <ul class="navigation">
                        <li>
                            <a href="{{ route('user.index') }}">
                                                <span class="label-nav">
                                                    Inicio
                                                </span>
                                                <span class="label-nav-sub" data-hover="Principal">
                                                    Principal
                                                </span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('user.loan') }}">
                                                <span class="label-nav">
                                                    PRÉSTAMOS
                                                </span>
                                                <span class="label-nav-sub" data-hover="Créditos">
                                                    Créditos
                                                </span>
                            </a>
                            <ul>
                                <li>
                                    <a href="">Personal </a>
                                </li>
                                <li>
                                    <a href="#">Hipotecario</a>
                                </li>
                                <li>
                                    <a href="#">Vehicular</a>
                                </li>
                                <li>
                                    <a href="#">Retiro</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('user.benefit') }}">
                                                <span class="label-nav">
                                                    BENEFICIOS
                                                </span>
                                                <span class="label-nav-sub" data-hover="Sociales">
                                                    Sociales
                                                </span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Mutuo Auxilio</a>
                                </li>
                                <li>
                                    <a href="#">MontePío</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('user.about') }}">
                                                <span class="label-nav">
                                                    NOSOTROS
                                                </span>
                                                <span class="label-nav-sub" data-hover="Caventel">
                                                    Caventel
                                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.contact') }}">
                                                <span class="label-nav">
                                                    CONTÁCTENOS
                                                </span>
                                                <span class="label-nav-sub" data-hover="Caventel">
                                                    Caventel
                                                </span>
                            </a>
                        </li>
                        @if( Auth::guest())
                            <li>
                                <a href="login">
                                                    <span class="label-nav">
                                                        INGRESAR
                                                    </span>
                                                    <span class="label-nav-sub" data-hover="Iniciar Sesión">
                                                        Iniciar Sesión
                                                    </span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('admin.index') }}">
                                                    <span class="label-nav">
                                                        {{ Auth::user()->name }}
                                                    </span>
                                                    <span class="label-nav-sub" data-hover="Panel de Gestión">
                                                        Panel de Gestión
                                                    </span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('admin.index') }}"><i class="fa fa-btn fa-sign-in"></i> Entrar</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Cerrar Sesión</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                </nav>

                <!-- Mobile Nav. Container -->
                <ul class="mobile-nav">
                    <li class="responsive-searchbox">
                        <!-- Responsive Nave -->
                        <form action="#" method="get">
                            <input type="text" class="searchbox-inputtext" id="searchbox-inputtext-mobile" name="s"/>
                            <button class="icon-search"></button>
                        </form>
                        <!-- //Responsive Nave// -->
                    </li>
                </ul>
                <!-- //Mobile Nav. Container// -->
            </div>
            <!-- Nav -->

        </div>


    </div>
</header>
<!-- //Header// -->