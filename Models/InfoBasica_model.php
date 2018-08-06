<?php

    
function buscar($ci){
        
    require('conexion.php');
        
    $query = "SELECT * FROM public.".'"UsuariosWeb"'." where cedula = $1;";
    $prepared = pg_prepare($dbcon, "", $query);
    $prepared = pg_execute($dbcon, "", array($ci));
    
    return ($prepared);
    
} 

function mostrar(){
    
    require('conexion.php');
    
    $query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where usuario = $1;";
    $prepared = pg_prepare($dbcon, "", $query);
    $prepared = pg_execute($dbcon, "", array($_SESSION['user']));
    $busqueda = buscar(pg_fetch_assoc($prepared)['cedula']);
    
    return $busqueda;
    
}

function cargo(){
    
    require('conexion.php');
    
    $query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where usuario = $1;";
    $prepared = pg_prepare($dbcon, "", $query);
    $prepared = pg_execute($dbcon, "", array($_SESSION['user']));
    $query = "SELECT cargo FROM public.".'"Personal"'." where ci = $1;";
    $select = pg_prepare($dbcon, "", $query);
    $select = pg_execute($dbcon, "", array(pg_fetch_assoc($prepared)['cedula']));
    
    return pg_fetch_assoc($select)['cargo'];
    
}
    


?>