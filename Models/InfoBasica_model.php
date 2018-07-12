<?php

    
function buscar($ci){
        
    require_once('conexion.php');
        
    $query = "SELECT * FROM public.".'"UsuariosWeb"'." where cedula = $1;";
    $prepared = pg_prepare($dbcon, "", $query);
    $prepared = pg_execute($dbcon, "", array($ci));
    return ($prepared);
} 
    


?>