<?php require_once "Views/head.php";?>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <!-- Search Box-->
               <div class="search-box">
            <button class="dismiss"><i class="fa fa-search" ></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
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
                                        Universidad
                                    </span>
                                    <strong>
                                        José Antonio Páez
                                    </strong>
                                </div>
                                <div class="brand-text brand-small">
                                    <strong>
                                        UJAP
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
                            <!-- Cerrar sesion    -->
                            <li class="nav-item">
                                <a class="nav-link logout" href="login.html">
                                    Cerrar sesión
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
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
                        <img alt="..." class="img-fluid rounded-circle" src="Views/Assets/img/avatar-1.jpg"/>
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
                    <li class="">
                        <a href="">
                            <i class="fa fa-home" ></i>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-money" ></i>
                            Fideicomiso
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-bar-chart">
                            </i>
                            ARC
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            Recibos
                        </a>
                    </li>
                    <li>

                        <a aria-expanded="false" data-toggle="collapse" href="#exampledropdownDropdown">
                           <i class="fa fa-clipboard" aria-hidden="true"></i>

                            Constancia de trabajo
                             <i class="icon-interface-windows"></i>
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
                            aqui debe ir como la especificación de la sección
                        </h2>
                    </div>
                </header>

                <!-- Contenido de la pestaña-->
                <section class="dashboard-counts no-padding-bottom">
                    <div class="container-fluid">
                        <div class="row ">
                            <!--=================================
                                información de la cuenta - perfil
                                ================================= -->
                            <div class="col-12 col-md-8 ">

                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">
                                            Información de la cuenta
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="group">
                                                        <input class="input2" required="required" type="text"/>
                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            cédula
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="group">
                                                        <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Nombre
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="group">
                                                        <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Apellido
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                         <div class="row">
                                            <div class="col-md-5">
                                                <div class="group">
                                                <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Departamento
                                                        </label>
                                            </div>
                                        </div>
                                            <div class="col-md-3">
                                                <div class="group">
                                                <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Cargo
                                                        </label>
                                            </div>
                                        </div>
                                            <div class="col-md-4">
                                                <div class="group">
                                                <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Categoría
                                                        </label>
                                            </div>
                                        </div>
                                        </div>

                                    <div class="row">


                                        <div class="col-md-3">
                                                <div class="group">
                                                <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Fecha de Ingreso
                                                        </label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                                <div class="group">
                                                <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            correo electronico
                                                        </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="group">
                                                <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            teléfono
                                                        </label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="group">
                                                <input class="input2" required="required" type="text"/>

                                                        <span class="bar">
                                                        </span>
                                                        <label class="label2">
                                                            Dirección
                                                        </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-4 btn-box">
                                                <button type="button" class="btn btn-submit btn-lg" disabled>Guardar Cambios</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>

                            <!--========================
                            especificaciones del usuario
                            ============================-->
<!--
                        <div class="col-lg-4">
                  <div class="client card">

                    <div class="card-body text-center">
                      <div class="client-avatar"><img src="Views/Assets/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle">
                        <div class="status bg-green"></div>
                      </div>
                      <div class="client-title">
                        <h3>Jason Doe</h3><span>Web Developer</span>
                      </div>
                      <div class="client-materias"></div>
                      <div class="client-salario"></div>
                      <div class="client-info center my-3">
                        <div class="row">
                          <div id="client-active" class="col-4"><strong><i  class="fa fa-book" aria-hidden="true"></i></strong><br><small>Materias</small></div>
                          <div class="col-4"><strong><i class="fa fa-money" aria-hidden="true"></i></strong><br><small>salario</small></div>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>-->
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