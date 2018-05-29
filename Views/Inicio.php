<?php /*require_once "Views/head.php";
$menu = 'Inicio';
require_once "Views/menu.php";*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <title>
                    Bootstrap Material Admin by Bootstrapious.com
                </title>
                <meta content="" name="description">
                    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                        <meta content="all,follow" name="robots">
                            <!-- Bootstrap CSS-->
                            <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
                                <!-- Font Awesome CSS-->
                                <link href="../Assets/css/font-awesome.min.css" rel="stylesheet">
                                    <!-- Fontastic Custom icon font-->
                                    <link href="mientras/fontastic.css" rel="stylesheet">
                                        <!-- Google fonts - Poppins -->
                                        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
                                            <!-- theme stylesheet-->
                                            <link href="mientras/style.default.css" id="theme-stylesheet" rel="stylesheet">
                                                <!-- Custom stylesheet - for your changes-->
                                                <link href="mientras/custom.css" rel="stylesheet">
                                                    <!-- Favicon-->
                                                    <link href="../Assets/img/logo.ico" rel="shortcut icon">
                                                    </link>
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
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
                                Mark Stephen
                            </h1>
                            <p>
                                Web Designer
                            </p>
                        </div>
                    </div>
                    <!-- Sidebar Navidation Menus-->
                    <span class="heading">
                        Main
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
                                Dashboard
                            </h2>
                        </div>
                    </header>
                    <!-- Dashboard Counts Section-->
                    <section class="dashboard-counts no-padding-bottom">
                        <div class="container-fluid">
                            <div class="row bg-white has-shadow">
                                <!-- Item -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-violet">
                                            <i class="icon-user">
                                            </i>
                                        </div>
                                        <div class="title">
                                            <span>
                                                New
                                                <br>
                                                    Clients
                                                </br>
                                            </span>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar bg-violet" role="progressbar" style="width: 25%; height: 4px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="number">
                                            <strong>
                                                25
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-red">
                                            <i class="icon-padnote">
                                            </i>
                                        </div>
                                        <div class="title">
                                            <span>
                                                Nuevo
                                                <br>
                                                    Recibo
                                                </br>
                                            </span>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-red" role="progressbar" style="width: 70%; height: 4px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="number">
                                            <strong>
                                                70
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-green">
                                            <i class="icon-bill">
                                            </i>
                                        </div>
                                        <div class="title">
                                            <span>
                                                New
                                                <br>
                                                    Invoices
                                                </br>
                                            </span>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar bg-green" role="progressbar" style="width: 40%; height: 4px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="number">
                                            <strong>
                                                40
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-orange">
                                            <i class="icon-check">
                                            </i>
                                        </div>
                                        <div class="title">
                                            <span>
                                                Open
                                                <br>
                                                    Cases
                                                </br>
                                            </span>
                                            <div class="progress">
                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-orange" role="progressbar" style="width: 50%; height: 4px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="number">
                                            <strong>
                                                50
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Dashboard Header Section    -->
                    <section class="dashboard-header">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Statistics -->
                                <div class="statistics col-lg-3 col-12">
                                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                                        <div class="icon bg-red">
                                            <i class="fa fa-tasks">
                                            </i>
                                        </div>
                                        <div class="text">
                                            <strong>
                                                234
                                            </strong>
                                            <br>
                                                <small>
                                                    Applications
                                                </small>
                                            </br>
                                        </div>
                                    </div>
                                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                                        <div class="icon bg-green">
                                            <i class="fa fa-calendar-o">
                                            </i>
                                        </div>
                                        <div class="text">
                                            <strong>
                                                152
                                            </strong>
                                            <br>
                                                <small>
                                                    Interviews
                                                </small>
                                            </br>
                                        </div>
                                    </div>
                                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                                        <div class="icon bg-orange">
                                            <i class="fa fa-paper-plane-o">
                                            </i>
                                        </div>
                                        <div class="text">
                                            <strong>
                                                147
                                            </strong>
                                            <br>
                                                <small>
                                                    Forwards
                                                </small>
                                            </br>
                                        </div>
                                    </div>
                                </div>
                                <!-- Line Chart            -->
                                <div class="chart col-lg-6 col-12">
                                    <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                                        <canvas id="lineCahrt">
                                        </canvas>
                                    </div>
                                </div>
                                <div class="chart col-lg-3 col-12">
                                    <!-- Bar Chart   -->
                                    <div class="bar-chart has-shadow bg-white">
                                        <div class="title">
                                            <strong class="text-violet">
                                                95%
                                            </strong>
                                            <br>
                                                <small>
                                                    Current Server Uptime
                                                </small>
                                            </br>
                                        </div>
                                        <canvas id="barChartHome">
                                        </canvas>
                                    </div>
                                    <!-- Numbers-->
                                    <div class="statistic d-flex align-items-center bg-white has-shadow">
                                        <div class="icon bg-green">
                                            <i class="fa fa-line-chart">
                                            </i>
                                        </div>
                                        <div class="text">
                                            <strong>
                                                99.9%
                                            </strong>
                                            <br>
                                                <small>
                                                    Success Rate
                                                </small>
                                            </br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Client Section-->
                    <section class="client no-padding-top">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Work Amount  -->
                                <div class="col-lg-4">
                                    <div class="work-amount card">
                                        <div class="card-body">
                                            <h3>
                                                Work Hours
                                            </h3>
                                            <small>
                                                Lorem ipsum dolor sit amet.
                                            </small>
                                            <div class="chart text-center">
                                                <div class="text">
                                                    <strong>
                                                        90
                                                    </strong>
                                                    <br>
                                                        <span>
                                                            Hours
                                                        </span>
                                                    </br>
                                                </div>
                                                <canvas id="pieChart">
                                                </canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Feeds Section-->
                </div>
            </div>
        </div>
    </body>
</html>
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
<?php /* require_once "Views/fbody.php"*/?>