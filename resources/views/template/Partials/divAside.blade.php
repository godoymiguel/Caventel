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
                               <span class="user-block-name">Hola, {{ Auth::user()->name }}</span>
                                @if(Auth::user()->type == 'superadmin')
                                    <span class="user-block-role">Super Administrador</span>
                                    @elseif(Auth::user()->type == 'admin')
                                        <span class="user-block-role">Directivo</span>
                                        @elseif(Auth::user()->type == 'secretary')
                                            <span class="user-block-role">Secretaria</span>
                                            @else
                                                <span class="user-block-role">Asociado</span>
                                @endif
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
                    <a href="{{ route('admin.index') }}" title="Inicio Administrador">
                        <em class="icon-home"></em>
                        <span data-localize="sidebar.nav.WIDGETS">Inicio</span>
                    </a>

                </li>

                <li class=" ">
                    <a href="{{ route('user.index') }}" title="Web Principal">
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
                            <a href="{{ route('Admin.users.index') }}" title="Consultar">
                                <span>Consultar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Actualizar">
                                <span>Actualizar Datos</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ route('Admin.users.create') }}" title="Registrar">
                                <span>Registrar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Retirar">
                                <span>Retirar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Reintegrar">
                                <span>Reintegrar</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#news" title="Noticias" data-toggle="collapse">
                        <em class="icon-book-open"></em>
                        <span data-localize="">Noticias</span>
                    </a>
                    <ul id="news" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Noticias</li>
                        <li class=" ">
                            <a href="{{ route('Admin.news.index') }}" title="Lista">
                                <span>Lista de Noticias</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ route('Admin.news.create') }}" title="Ingresar">
                                <span>Ingresar Noticia</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="/logout" onclick="window.close();" title="Salir del Sistema">
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