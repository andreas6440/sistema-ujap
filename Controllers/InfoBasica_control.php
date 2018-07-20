<?php

require_once("Models/InfoBasica_model.php");

function buscarinfo(){
    
     if (isset($_REQUEST["BuCedula"])) {
         $datos = buscar($_POST['scedula']);
         return $datos;
     }
    
}

function mostrarinfo(){
    
    $datos = mostrar();
    return $datos;
    
}

?>