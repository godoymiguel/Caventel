<aside class="aside">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <!-- START sidebar nav-->
            <ul class="nav">
                <!-- START user info-->
                <li class="has-user-block">
                    <div id="user-block">
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
                        @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin' || Auth::user()->type == 'secretary')
                            <li class=" ">
                                <a href="{{ route('Admin.UserLoan.index') }}" title="Total Prestamos">
                                    <span>Listado Total</span>
                                </a>
                            </li>
                            @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin')
                            <li class=" ">
                                <a href="{{ route('Admin.UserLoan.create') }}" title="Ingresar Préstamo">
                                    <span>Ingresar Préstamo</span>
                                </a>
                            </li>
                            @endif
                        @endif
                        <li class=" ">
                            <a href="{{ route('Admin.UserLoan.show', Auth::user()->id) }}" title="Préstamo Realizados">
                                <span>Préstamos Realizados</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ route('Admin.UserLoan.show', Auth::user()->id) }}" title="Préstamo Disponibles">
                                <span>Préstamos Disponibles</span>
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
                        @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin' || Auth::user()->type == 'secretary')
                            <li class=" ">
                                <a href="{{ route('Admin.UserAsset.index') }}" title="Generales">
                                    <span>Generales</span>
                                </a>
                            </li>
                            @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin')
                            <li class=" ">
                                <a href="{{ route('Admin.UserAsset.createRetirement') }}" title="Retirar">
                                    <span>Retirar</span>
                                </a>
                            </li>
                            @endif
                        @endif
                        <li class=" ">
                            <a href="{{ route('Admin.UserAsset.show', Auth::User()->id) }}" title="Propios">
                                <span>Propios</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ route('Admin.UserAsset.createM') }}" title="Aporte Mensual">
                                <span>Aporte Mensual</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ route('Admin.UserAsset.create') }}" title="Aporte Extraordinario">
                                <span>Aporte Extraordinario</span>
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
                            <a href="#consultH" title="Consultar" data-toggle="collapse">
                                <span>Consultar</span>
                            </a>
                            <ul id="consultH" class="nav sidebar-subnav collapse">
                                <li class=" ">
                                    <a href="{{ route('Admin.HeritageTotal.index') }}" title="Total">
                                        <span>Total</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ route('Admin.HeritageAsset.index') }}" title="Haberes">
                                        <span>Haberes</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ route('Admin.HeritageProperty.index') }}" title="Inmueble">
                                        <span>Inmueble</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ route('Admin.HeritageAssetRetirement.index') }}" title="Retiro">
                                        <span>Retiro</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin')
                            <li class=" ">
                                <a href="{{ route('Admin.HeritageAsset.create') }}" title="Ingresar Donación">
                                    <span>Ingresar Haber</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('Admin.HeritageProperty.create') }}" title="Ingresar Inmueble">
                                    <span>Ingresar Inmueble</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('Admin.HeritageAssetRetirement.create') }}" title="Ingresar Retiro">
                                    <span>Ingresar Retiro</span>
                                </a>
                            </li>
                        @endif
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
                         @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin' || Auth::user()->type == 'secretary')
                            <li class=" ">
                                <a href="{{ route('Admin.reports.create') }}" title="Reporte Anual">
                                    <span>Redactar</span>
                                </a>
                            </li>
                        @endif
                    </ul>

                </li>
                {{--
                @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin' || Auth::user()->type == 'secretary')
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
                @endif
                --}}
                <li class=" ">
                    <a href="#user" title="Usuarios" data-toggle="collapse">
                        <em class="icon-user"></em>
                        <span data-localize="">Usuarios</span>
                    </a>
                    <ul id="user" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Usuarios</li>
                        @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin' || Auth::user()->type == 'secretary')
                            <li class=" ">
                                <a href="{{ route('Admin.users.index') }}" title="Consultar">
                                    <span>Todos</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('Admin.user_profiles.index') }}" title="Consultar Nómina">
                                    <span>Consultar Nómina</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('Admin.users.create') }}" title="Registrar">
                                    <span>Registrar</span>
                                </a>
                            </li>
                        @endif
                        <li class=" ">
                            <a href="{{ route('Admin.user_profiles.show', Auth::user()->id) }}" title="Consultar">
                                <span>Perfil</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ route('Admin.user_profiles.edit', Auth::user()->id) }}" title="Actualizar">
                                <span>Actualizar Datos</span>
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
                        @if(Auth::user()->type == 'superadmin' || Auth::user()->type == 'admin' || Auth::user()->type == 'secretary')
                            <li class=" ">
                                <a href="{{ route('Admin.news.create') }}" title="Ingresar">
                                    <span>Ingresar Noticia</span>
                                </a>
                            </li>
                        @endif
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
