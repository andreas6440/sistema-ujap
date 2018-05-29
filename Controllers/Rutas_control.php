<?php

<<<<<<< HEAD
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
                require_once ('Views/modulo/Menu.php');
                require_once $ruta;
                if (!isset($_SESSION['user'])){
=======
function rutear($rut)
{

    //echo $_SESSION['rut'];
    $rut    = $_SESSION['rut'];
    $pagina = isset($rut) ? $rut : 'Login';

    if ($pagina == 'Salir') {
        session_destroy();
        echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
    } else {
        if ($pagina == 'Login' || $pagina == ' ') {
            $ruta = 'Views/Login.php';
            require_once $ruta;
        } else {
            $ruta = 'Views/' . $pagina . '.php';
            if (is_readable($ruta)) {
                require_once 'Views/modulo/Menu.php';
                require_once $ruta;
                if (!isset($_SESSION['user'])) {
>>>>>>> 7615fd6ea47b7796ee6f3efac7f4d18e68749667
                    echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
                }
            } else {
                echo "Esta pagina no existe,crea una pagina de error";
            }
        }
<<<<<<< HEAD
    } 
}
        
?>
=======
    }
}
>>>>>>> 7615fd6ea47b7796ee6f3efac7f4d18e68749667
