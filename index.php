<?php

session_start();
require_once 'Views/modulo/head.php';
require_once 'Controllers/Rutas_control.php';
if (isset($_GET['p'])) {
    $_SESSION['rut'] = $_GET['p'];
}
if (!isset($_SESSION['rut'])) {
    $_SESSION['rut'] = 'Login';
}
rutear($_SESSION['rut']);
if (($_SESSION['rut'])!='Login') {
	require_once 'Views/modulo/Footer.php';

}
require_once 'Views/modulo/fbody.php';

