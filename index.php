<?php
session_start();
require_once 'Views/modulo/head.php';

<<<<<<< HEAD

require_once 'Controllers/Rutas_control.php';
if(isset($_GET['p'])){
    $_SESSION['rut']=$_GET['p'];
}
if(!isset($_SESSION['rut'])){
    $_SESSION['rut']='Login';
}
=======
require_once 'Controllers/Rutas_control.php';
if (isset($_GET['p'])) {
    $_SESSION['rut'] = $_GET['p'];
}

if (!isset($_SESSION['rut'])) {
    $_SESSION['rut'] = 'Login';
}
>>>>>>> 7615fd6ea47b7796ee6f3efac7f4d18e68749667
rutear($_SESSION['rut']);

require_once 'Views/modulo/fbody.php';

?>