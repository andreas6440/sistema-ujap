<?php require_once "Views/head.php";?>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <!-- Search Box-->
                <div class="search-box">
                    <button class="dismiss">
                        <i class="icon-close">
                        </i>
                    </button>
                    <form action="#" id="searchForm" role="search">
                        <input class="form-control" placeholder="Qué estás buscando..." type="search">
                        </input>
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand -->
                            <a class="navbar-brand" href="index.html">
                                <div class="brand-text brand-big">
                                    <span>
                                        Bootstrap
                                    </span>
                                    <strong>
                                        Dashboard
                                    </strong>
                                </div>
                                <div class="brand-text brand-small">
                                    <strong>
                                        BD
                                    </strong>
                                </div>
                            </a>
                            <!-- Toggle Button-->
                            <a class="menu-btn active" href="#" id="toggle-btn">
                                <span>
                                </span>
                                <span>
                                </span>
                                <span>
                                </span>
                            </a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <li class="nav-item d-flex align-items-center">
                                <a href="#" id="search">
                                    <i class="icon-search">
                                    </i>
                                </a>
                            </li>
                            <!-- Logout    -->
                            <li class="nav-item">
                                <a class="nav-link logout" href="login.html">
                                    Logout
                                    <i class="fa fa-sign-out">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar">
                        <img alt="..." class="img-fluid rounded-circle" src="img/avatar-1.jpg"/>
                    </div>
                    <div class="title">
                        <h1 class="h4">
                            Nombre de usuario
                        </h1>
                        <p>
                            categoría
                        </p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus-->
                <span class="heading">
                    Principal
                </span>
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="index.html">
                            <i class="icon-home">
                            </i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="tables.html">
                            <i class="icon-grid">
                            </i>
                            Fideicomiso
                        </a>
                    </li>
                    <li>
                        <a href="charts.html">
                            <i class="fa fa-bar-chart">
                            </i>
                            ARC
                        </a>
                    </li>
                    <li>
                        <a href="forms.html">
                            <i class="icon-padnote">
                            </i>
                            Recibos
                        </a>
                    </li>
                    <li>
                        <a aria-expanded="false" data-toggle="collapse" href="#exampledropdownDropdown">
                            <i class="icon-interface-windows">
                            </i>
                            Constancia de trabajo
                        </a>
                        <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                            <li>
                                <a href="#">
                                    Simple
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Resumen de trayectoria
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">
                            aqui debe ir el nombre y apellido del trabajador
                        </h2>
                    </div>
                </header>
                <!-- Dashboard Counts Section-->
                <section class="dashboard-counts no-padding-bottom">
                    <div class="container-fluid">
                        <div class="row ">
                            <!-- Item -->
                            <div class="col-12 col-md-8 ">
                                <!--<div class="item d-flex align-items-center">
                                      </div>-->
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">
                                            Información de la cuenta
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div id="group">
                                                        <input class="input2" required="required" type="text"/>
                                                        <span class="highlight">
                                                        </span>
                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Email
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="mr-auto my-5" data-target="#modal_recuperacion" data-toggle="modal" href="#">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                            <button class="btn pull-right btn-primary titulo" type="submit">
                                                Actualizar Perfil
                                            </button>
                                            <div class="clearfix">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="card card-profile">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="./assets/img/faces/marc.jpg"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="category text-gray">
                                            CEO / Co-Founder
                                        </h6>
                                        <h4 class="card-title">
                                            Alec Thompson
                                        </h4>
                                        <p class="card-content">
                                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                        </p>
                                        <a class="btn btn-primary btn-round" href="#pablo">
                                            Follow
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Header Section    -->
            </div>
        </div>
    </div>
    <!-- Page Footer
<footer class="main-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <p>
                    Your company © 2017-2019
                </p>
            </div>
            <div class="col-sm-6 text-right">
                <p>
                    Design by
                    <a class="external" href="https://bootstrapious.com/admin-templates">
                        Bootstrapious
                    </a>
                </p>

            </div>
        </div>
    </div>
</footer>-->
<?php
require_once "Views/fbody.php";
?>