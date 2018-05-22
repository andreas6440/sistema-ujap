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

                                <a class="nav-link logout" href="?p=Login">
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
                          <a href="?p=Perfil">  Nombre de usuario</a>
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

                    <li class="<?php
if ($pagina == 'Fideicomiso') {
    echo 'active';
}

?>">
                       <a href="?p=Fideicomiso">
                            <i class="fa fa-money" ></i>
                            Fideicomiso
                        </a>
                    </li>
                     <li class="<?php
if ($pagina == 'ARC') {
    echo 'active';
}

?>">
                        <a href="?p=ARC">
                            <i class="fa fa-bar-chart">
                            </i>
                            ARC
                        </a>
                    </li>
                     <li class="<?php
if ($pagina == 'Recibo') {
    echo 'active';
}

?>">

                        <a href="?p=Recibo">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            Recibos
                        </a>
                    </li>
                     <li class="<?php
if ($pagina == 'Constancia') {
    echo 'active';
}

?>">

                        <a href="?p=Constancia">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                            Constancia de Trabajo
                        </a>
                    </li>
                                     </ul>
            </nav>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">
                            Inicio / <?php echo $pagina ?>
                        </h2>
                    </div>
                </header>
