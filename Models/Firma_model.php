<?php

function actualizarFirmam($datos){
   
    require "conexion.php";
        
    if (isset($datos["cedula"])){
                
        $query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where cedula = $1 and nombre = $2 and apellido = $3;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(
            $datos["cedula"],
            $datos["nombre"],
            $datos["apellido"]
        ));
        
        if(pg_fetch_assoc($prepared)['cedula']){
            $query = "UPDATE public.".'"Firma"'." SET cedula = $1, nombre = $2, apellido = $3 WHERE id=1;";
            $prepared = pg_prepare($dbcon, "", $query);
            $prepared = pg_execute($dbcon, "", array(
            $datos["cedula"],
            $datos["nombre"],
            $datos["apellido"]));
        }
                   
    }  
}

function buscarFirma(){
    
    require "conexion.php";
    
    $query = "SELECT * FROM public.".'"Firma"'." where id = 1;";
    $prepared = pg_prepare($dbcon, "", $query);
    $prepared = pg_execute($dbcon, "", array());
    return $prepared;
    
}

?>