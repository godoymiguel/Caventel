@extends('template.mainAdmin')

@section('divAdmin')
        <!-- top navbar-->
<header class="topnavbar-wrapper">
    <!-- START Top Navbar-->
    <nav role="navigation" class="navbar topnavbar">
        <!-- START navbar header-->
        <div class="navbar-header">
            <a href="#/" class="navbar-brand">
                <div class="brand-logo">
                    <img src="{{ asset('img/mainLogo.png')}}" alt="Caventel Logo" class="img-responsive">
                </div>
                <!--<div class="brand-logo-collapsed">
                    <img src="{{ asset('img/mainLogo.png')}}" alt="Caventel Logo" class="img-responsive">
                </div>-->
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
                    <a href="#" title="Lock screen">
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
                <!-- START Alert menu-->
                <li class="dropdown dropdown-list">
                    <a href="#" data-toggle="dropdown">
                        <em class="icon-bell"></em>
                        <div class="label label-danger"></div>
                    </a>
                    <!-- START Dropdown menu-->
                    <ul class="dropdown-menu animated flipInX">
                        <li>
                            <!-- START list group-->
                            <div class="list-group">
                                <!-- list item-->
                                <a href="#" class="list-group-item">
                                    <div class="media-box">
                                        <div class="pull-left">
                                            <em class="fa fa-twitter fa-2x text-info"></em>
                                        </div>
                                        <div class="media-box-body clearfix">
                                            <p class="m0">New followers</p>
                                            <p class="m0 text-muted">
                                                <small>1 new follower</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="#" class="list-group-item">
                                    <div class="media-box">
                                        <div class="pull-left">
                                            <em class="fa fa-envelope fa-2x text-warning"></em>
                                        </div>
                                        <div class="media-box-body clearfix">
                                            <p class="m0">New e-mails</p>
                                            <p class="m0 text-muted">
                                                <small>You have 10 new emails</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="#" class="list-group-item">
                                    <div class="media-box">
                                        <div class="pull-left">
                                            <em class="fa fa-tasks fa-2x text-success"></em>
                                        </div>
                                        <div class="media-box-body clearfix">
                                            <p class="m0">Pending Tasks</p>
                                            <p class="m0 text-muted">
                                                <small>11 pending task</small>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- last list item-->
                                <a href="#" class="list-group-item">
                                    <small>More notifications</small>
                                    <span class="label label-danger pull-right">14</span>
                                </a>
                            </div>
                            <!-- END list group-->
                        </li>
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END Alert menu-->

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
                                <span class="user-block-name">Hello, Mike</span>
                                <span class="user-block-role">Designer</span>
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
                    <a href="Admin" title="Widgets">
                        <!--                        <em class="icon-grid"></em>-->
                        <span data-localize="sidebar.nav.WIDGETS">Inicio</span>
                    </a>

                </li>

                <li class=" ">
                    <a href="/" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Web</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Préstamo</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Haberes</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Patrimonio</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Relaciones Bancarias</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Reportes</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Cierre Anual</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Usuarios</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#" onclick="window.close();" title="Widgets">

                        <span data-localize="sidebar.nav.WIDGETS">Salir</span>
                    </a>
                </li>
                <!--
                <li class=" ">
                    <a href="#dashboard" title="Dashboard" data-toggle="collapse">
                        <div class="pull-right label label-info">3</div>
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
                    </a>
                    <ul id="dashboard" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Dashboard</li>
                        <li class=" ">
                            <a href="dashboard.html" title="Dashboard v1">
                                <span>Dashboard v1</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="dashboard_v2.html" title="Dashboard v2">
                                <span>Dashboard v2</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="dashboard_v3.html" title="Dashboard v3">
                                <span>Dashboard v3</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" ">
                    <a href="#layout" title="Layouts" data-toggle="collapse">
                        <em class="icon-layers"></em>
                        <span>Layouts</span>
                    </a>
                    <ul id="layout" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Layouts</li>
                        <li class=" ">
                            <a href="dashboard_h.html" title="Horizontal">
                                <span>Horizontal</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.COMPONENTS">Components</span>
                </li>
                <li class=" ">
                    <a href="#elements" title="Elements" data-toggle="collapse">
                        <em class="icon-chemistry"></em>
                        <span data-localize="sidebar.nav.element.ELEMENTS">Elements</span>
                    </a>
                    <ul id="elements" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Elements</li>
                        <li class=" ">
                            <a href="buttons.html" title="Buttons">
                                <span data-localize="sidebar.nav.element.BUTTON">Buttons</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="notifications.html" title="Notifications">
                                <span data-localize="sidebar.nav.element.NOTIFICATION">Notifications</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="sweetalert.html" title="Sweet Alert">
                                <span>Sweet Alert</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="tour.html" title="Tour">
                                <span>Tour</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="carousel.html" title="Carousel">
                                <span data-localize="sidebar.nav.element.INTERACTION">Carousel</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="spinners.html" title="Spinners">
                                <span data-localize="sidebar.nav.element.SPINNER">Spinners</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="animations.html" title="Animations">
                                <span data-localize="sidebar.nav.element.ANIMATION">Animations</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="dropdown-animations.html" title="Dropdown">
                                <span data-localize="sidebar.nav.element.DROPDOWN">Dropdown</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="nestable.html" title="Nestable">
                                <span>Nestable</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="sortable.html" title="Sortable">
                                <span>Sortable</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="panels.html" title="Panels">
                                <span data-localize="sidebar.nav.element.PANEL">Panels</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="portlets.html" title="Portlets">
                                <span data-localize="sidebar.nav.element.PORTLET">Portlets</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="grid.html" title="Grid">
                                <span data-localize="sidebar.nav.element.GRID">Grid</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="grid-masonry.html" title="Grid Masonry">
                                <span data-localize="sidebar.nav.element.GRID_MASONRY">Grid Masonry</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="typo.html" title="Typography">
                                <span data-localize="sidebar.nav.element.TYPO">Typography</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="icons-font.html" title="Font Icons">
                                <div class="pull-right label label-success">+400</div>
                                <span data-localize="sidebar.nav.element.FONT_ICON">Font Icons</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="icons-weather.html" title="Weather Icons">
                                <div class="pull-right label label-success">+100</div>
                                <span data-localize="sidebar.nav.element.WEATHER_ICON">Weather Icons</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="colors.html" title="Colors">
                                <span data-localize="sidebar.nav.element.COLOR">Colors</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#forms" title="Forms" data-toggle="collapse">
                        <em class="icon-note"></em>
                        <span data-localize="sidebar.nav.form.FORM">Forms</span>
                    </a>
                    <ul id="forms" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Forms</li>
                        <li class=" ">
                            <a href="form-standard.html" title="Standard">
                                <span data-localize="sidebar.nav.form.STANDARD">Standard</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-extended.html" title="Extended">
                                <span data-localize="sidebar.nav.form.EXTENDED">Extended</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-validation.html" title="Validation">
                                <span data-localize="sidebar.nav.form.VALIDATION">Validation</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-wizard.html" title="Wizard">
                                <span>Wizard</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-upload.html" title="Upload">
                                <span>Upload</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-xeditable.html" title="xEditable">
                                <span>xEditable</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-imagecrop.html" title="Cropper">
                                <span>Cropper</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#charts" title="Charts" data-toggle="collapse">
                        <em class="icon-graph"></em>
                        <span data-localize="sidebar.nav.chart.CHART">Charts</span>
                    </a>
                    <ul id="charts" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Charts</li>
                        <li class=" ">
                            <a href="chart-flot.html" title="Flot">
                                <span data-localize="sidebar.nav.chart.FLOT">Flot</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="chart-radial.html" title="Radial">
                                <span data-localize="sidebar.nav.chart.RADIAL">Radial</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="chart-js.html" title="Chart JS">
                                <span>Chart JS</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="chart-rickshaw.html" title="Rickshaw">
                                <span>Rickshaw</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="chart-morris.html" title="MorrisJS">
                                <span>MorrisJS</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="chart-chartist.html" title="Chartist">
                                <span>Chartist</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#tables" title="Tables" data-toggle="collapse">
                        <em class="icon-grid"></em>
                        <span data-localize="sidebar.nav.table.TABLE">Tables</span>
                    </a>
                    <ul id="tables" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Tables</li>
                        <li class=" ">
                            <a href="table-standard.html" title="Standard">
                                <span data-localize="sidebar.nav.table.STANDARD">Standard</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="table-extended.html" title="Extended">
                                <span data-localize="sidebar.nav.table.EXTENDED">Extended</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="table-datatable.html" title="DataTables">
                                <span data-localize="sidebar.nav.table.DATATABLE">DataTables</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="table-jqgrid.html" title="jqGrid">
                                <span>jqGrid</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#maps" title="Maps" data-toggle="collapse">
                        <em class="icon-map"></em>
                        <span data-localize="sidebar.nav.map.MAP">Maps</span>
                    </a>
                    <ul id="maps" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Maps</li>
                        <li class=" ">
                            <a href="maps-google.html" title="Google Maps">
                                <span data-localize="sidebar.nav.map.GOOGLE">Google Maps</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="maps-vector.html" title="Vector Maps">
                                <span data-localize="sidebar.nav.map.VECTOR">Vector Maps</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.MORE">More</span>
                </li>
                <li class=" ">
                    <a href="#pages" title="Pages" data-toggle="collapse">
                        <em class="icon-doc"></em>
                        <span data-localize="sidebar.nav.pages.PAGES">Pages</span>
                    </a>
                    <ul id="pages" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Pages</li>
                        <li class=" ">
                            <a href="login.html" title="Login">
                                <span data-localize="sidebar.nav.pages.LOGIN">Login</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="register.html" title="Sign up">
                                <span data-localize="sidebar.nav.pages.REGISTER">Sign up</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="recover.html" title="Recover Password">
                                <span data-localize="sidebar.nav.pages.RECOVER">Recover Password</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="lock.html" title="Lock">
                                <span data-localize="sidebar.nav.pages.LOCK">Lock</span>
                            </a>
                        </li>
                        <li class=" active">
                            <a href="template.html" title="Starter Template">
                                <span data-localize="sidebar.nav.pages.STARTER">Starter Template</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="404.html" title="404">
                                <span>404</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#extras" title="Extras" data-toggle="collapse">
                        <em class="icon-cup"></em>
                        <span data-localize="sidebar.nav.extra.EXTRA">Extras</span>
                    </a>
                    <ul id="extras" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Extras</li>
                        <li class=" ">
                            <a href="#blog" title="Blog" data-toggle="collapse">
                                <em class="fa fa-angle-right"></em>
                                <span>Blog</span>
                            </a>
                            <ul id="blog" class="nav sidebar-subnav collapse">
                                <li class="sidebar-subnav-header">Blog</li>
                                <li class=" ">
                                    <a href="blog.html" title="List">
                                        <span>List</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="blog-post.html" title="Post">
                                        <span>Post</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="blog-articles.html" title="Articles">
                                        <span>Articles</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="blog-article-view.html" title="Article View">
                                        <span>Article View</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#ecommerce" title="eCommerce" data-toggle="collapse">
                                <em class="fa fa-angle-right"></em>
                                <span>eCommerce</span>
                            </a>
                            <ul id="ecommerce" class="nav sidebar-subnav collapse">
                                <li class="sidebar-subnav-header">eCommerce</li>
                                <li class=" ">
                                    <a href="ecommerce-orders.html" title="Orders">
                                        <div class="pull-right label label-info">10</div>
                                        <span>Orders</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ecommerce-order-view.html" title="Order View">
                                        <span>Order View</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ecommerce-products.html" title="Products">
                                        <span>Products</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ecommerce-product-view.html" title="Product View">
                                        <span>Product View</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#forum" title="Forum" data-toggle="collapse">
                                <em class="fa fa-angle-right"></em>
                                <span>Forum</span>
                            </a>
                            <ul id="forum" class="nav sidebar-subnav collapse">
                                <li class="sidebar-subnav-header">Forum</li>
                                <li class=" ">
                                    <a href="forum-categories.html" title="Categories">
                                        <span>Categories</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="forum-topics.html" title="Topics">
                                        <span>Topics</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="forum-discussion.html" title="Discussion">
                                        <span>Discussion</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="mailbox.html" title="Mailbox">
                                <span data-localize="sidebar.nav.extra.MAILBOX">Mailbox</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="timeline.html" title="Timeline">
                                <span data-localize="sidebar.nav.extra.TIMELINE">Timeline</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="calendar.html" title="Calendar">
                                <span data-localize="sidebar.nav.extra.CALENDAR">Calendar</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="invoice.html" title="Invoice">
                                <span data-localize="sidebar.nav.extra.INVOICE">Invoice</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="search.html" title="Search">
                                <span data-localize="sidebar.nav.extra.SEARCH">Search</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="todo.html" title="Todo List">
                                <span data-localize="sidebar.nav.extra.TODO">Todo List</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="profile.html" title="Profile">
                                <span data-localize="sidebar.nav.extra.PROFILE">Profile</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#multilevel" title="Multilevel" data-toggle="collapse">
                        <em class="fa fa-folder-open-o"></em>
                        <span>Multilevel</span>
                    </a>
                    <ul id="multilevel" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Multilevel</li>
                        <li class=" ">
                            <a href="#level1" title="Level 1" data-toggle="collapse">
                                <span>Level 1</span>
                            </a>
                            <ul id="level1" class="nav sidebar-subnav collapse">
                                <li class="sidebar-subnav-header">Level 1</li>
                                <li class=" ">
                                    <a href="multilevel-1.html" title="Level1 Item">
                                        <span>Level1 Item</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="#level2" title="Level 2" data-toggle="collapse">
                                        <span>Level 2</span>
                                    </a>
                                    <ul id="level2" class="nav sidebar-subnav collapse">
                                        <li class="sidebar-subnav-header">Level 2</li>
                                        <li class=" ">
                                            <a href="#level3" title="Level 3" data-toggle="collapse">
                                                <span>Level 3</span>
                                            </a>
                                            <ul id="level3" class="nav sidebar-subnav collapse">
                                                <li class="sidebar-subnav-header">Level 3</li>
                                                <li class=" ">
                                                    <a href="multilevel-3.html" title="Level3 Item">
                                                        <span>Level3 Item</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="documentation.html" title="Documentation">
                        <em class="icon-graduation"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">Documentation</span>
                    </a>
                </li>-->
            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>

<!-- Main section-->
<section>
    @yield('IndexAdmin')
</section>
<!-- Page footer-->
<footer>
    <span>
        &copy; 2016 Caja de Ahorro Venezola de Telefericos | Ingeniería de Sistemas - Universidad de Los Andes
    </span>
</footer>
@endsection