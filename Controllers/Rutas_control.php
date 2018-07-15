<?php

function rutear($rut){
    
    //echo $_SESSION['rut'];
    $rut=$_SESSION['rut'];
    $pagina = isset($rut) ? $rut : 'Login';
    
    if($pagina == 'Salir'){
        session_destroy();
        echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
    }else{
        if ($pagina == 'Login' || $pagina == ' ') {
            $ruta = 'Views/' . $pagina . '.php';
            require_once($ruta);
        } else {
            $ruta = 'Views/' . $pagina . '.php';
            if (is_readable($ruta)) {
                require_once ('Views/modulo/MenuAdmin.php');
                require_once $ruta;
                if (!isset($_SESSION['user'])){
                    echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
                }
            } else {
                echo "Esta pagina no existe,crea una pagina de error";
            }
        }
    } 
}
        
?>