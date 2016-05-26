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