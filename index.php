<?php

$pagina = isset($_GET['p']) ? $_GET['p'] : 'ARC';

require_once 'Views/modulo/head.php';

if ($pagina == 'Login' || $pagina == ' ') {
    $ruta = 'Views/' . $pagina . '.php';
    require_once $ruta;
} else {
    $ruta = 'Views/' . $pagina . '.php';
    if (is_readable($ruta)) {
        require_once 'Views/modulo/Menu.php';
        require_once $ruta;

        /*Alcides aqui pon que si no ha iniciado sesión no se puede dirigir a ese lugar*/
    } else {
        echo "Esta pagina no existe,crea una pagina de error";
    }
}

require_once 'Views/modulo/fbody.php';
