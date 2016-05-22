@extends('template.mainAdmin')

@section('divAdmin')
        <!-- top navbar-->
<header class="topnavbar-wrapper">
    <!-- START Top Navbar-->
    <nav role="navigation" class="navbar topnavbar">
        <!-- START navbar header-->
        <div class="navbar-header">
            <a href="/" class="navbar-brand">
                <div class="brand-logo">
                    <img src="{{ asset('img/mainLogo.png')}}" alt="Caventel Logo" class="img-responsive">
                </div>
            </a>
        </div>
        <!-- END navbar header-->
        <!-- START Nav wrapper-->
        <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
                <li>
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                        <em class="fa fa-navicon"></em>
                    </a>
                    <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                    <a href="#" data-toggle-state="aside-toggled" data-no-persist="true"
                       class="visible-xs sidebar-toggle">
                        <em class="fa fa-navicon"></em>
                    </a>
                </li>

                <!-- START lock screen-->
                <li>
                    <a href="Inactivo" title="Lock screen">
                        <em class="icon-lock"></em>
                    </a>
                </li>
                <!-- END lock screen-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
                <!-- Search icon-->
                <li>
                    <a href="#" data-search-open="">
                        <em class="icon-magnifier"></em>
                    </a>
                </li>
                <!-- Fullscreen (only desktops)-->
                <li class="visible-lg">
                    <a href="#" data-toggle-fullscreen="">
                        <em class="fa fa-expand"></em>
                    </a>
                </li>


            </ul>
            <!-- END Right Navbar-->
        </div>
        <!-- END Nav wrapper-->
        <!-- START Search form-->
        <form role="search" action="http://themicon.co/theme/angle/v3.3.1/backend-jquery/app/search.html"
              class="navbar-form">
            <div class="form-group has-feedback">
                <input type="text" placeholder="Type and hit enter ..." class="form-control">
                <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
        </form>
        <!-- END Search form-->
    </nav>
    <!-- END Top Navbar-->
</header>
<!-- sidebar-->
<aside class="aside">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <!-- START sidebar nav-->
            <ul class="nav">
                <!-- START user info-->
                <li class="has-user-block">
                    <div id="user-block"  >
                        <div class="item user-block">
                            <!-- User picture-->
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                    <img src="{{ asset('img/user/1.png') }}" alt="Avatar" width="60" height="60"
                                         class="img-thumbnail img-circle">
                                    <div class="circle circle-success circle-lg"></div>
                                </div>
                            </div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
                                <span class="user-block-name">Hola, Miguel</span>
                                <span class="user-block-role">Administrador</span>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END user info-->
                <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">Menu de Navegación</span>
                </li>
                <li class=" ">
                    <a href="Admin" title="Incio Administrador">
                        <em class="icon-home"></em>
                        <span data-localize="sidebar.nav.WIDGETS">Inicio</span>
                    </a>

                </li>

                <li class=" ">
                    <a href="/" title="Web Principal">
                        <em class="icon-doc"></em>
                        <span data-localize="sidebar.nav.WIDGETS">Web</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#loan" title="Prestamo" data-toggle="collapse">
                        <em class="icon-wallet"></em>
                        <span data-localize="">Préstamo</span>
                    </a>
                    <ul id="loan" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Pŕestamos</li>
                        <li class=" ">
                            <a href="#" title="Consultar Deuda">
                                <span>Consultar Deuda</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Solicitar Préstamo">
                                <span>Consultar Préstamo</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Solicitar Préstamo">
                                <span>Solicitar Préstamo</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Pagar Préstamo">
                                <span>Pagar Préstamo</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#assets" title="Haberes" data-toggle="collapse">
                        <em class="icon-briefcase"></em>
                        <span data-localize="">Haberes</span>
                    </a>
                    <ul id="assets" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Haberes</li>
                        <li class=" ">
                            <a href="#" title="Consultar Deuda">
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Solicitar Préstamo">
                                <span>Solicitar Préstamo</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Pagar Préstamo">
                                <span>Pagar Préstamo</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#heritage" title="Patrimonio" data-toggle="collapse">
                        <em class="icon-folder-alt"></em>
                        <span data-localize="">Patrimonio</span>
                    </a>
                    <ul id="heritage" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Patrimonio</li>
                        <li class=" ">
                            <a href="#" title="Consultar">
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Ingresar Donación">
                                <span>Ingresar Donación</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Ingresar Inmueble">
                                <span>Ingresar Inmueble</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#banking" title="Relaciones Bancarias" data-toggle="collapse">
                        <em class="icon-grid"></em>
                        <span data-localize="">Relaciones Bancarias</span>
                    </a>
                    <ul id="banking" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Relaciones Bancarias</li>
                        <li class=" ">
                            <a href="#" title="Consultar">
                                <span>Consultar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#reports" title="Reportes" data-toggle="collapse">
                        <em class="icon-pie-chart"></em>
                        <span data-localize="">Reportes</span>
                    </a>
                    <ul id="reports" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Reportes</li>
                        <li class=" ">
                            <a href="#" title="Consultar">
                                <span>Consultar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#closure" title="Cierre Anual" data-toggle="collapse">
                        <em class="icon-calculator"></em>
                        <span data-localize="">Cierre Anual</span>
                    </a>
                    <ul id="closure" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Cierre Anual</li>
                        <li class=" ">
                            <a href="#" title="Consultar">
                                <span>Consultar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#user" title="Usuarios" data-toggle="collapse">
                        <em class="icon-user"></em>
                        <span data-localize="">Usuarios</span>
                    </a>
                    <ul id="user" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Usuarios</li>
                        <li class=" ">
                            <a href="#" title="Consultar">
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Actualizar">
                                <span>Actualizar Datos</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Registrar">
                                <span>Registrar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Retirar">
                                <span>Retirar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#" title="Reintegrar">
                                <span>Reintegrar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#" onclick="window.close();" title="Salir del Sistema">
                        <em class="icon-logout"></em>
                        <span data-localize="sidebar.nav.WIDGETS">Salir</span>
                    </a>
                </li>

            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>

<!-- Main section-->
<section>
    @yield('IndexAdmin')
    @yield('RegisAdmin')
</section>
<!-- Page footer-->
<footer>
    <span>
        &copy; 2016 Caja de Ahorro Venezola de Telefericos | Ingeniería de Sistemas - Universidad de Los Andes
    </span>
</footer>
@endsection