<?php


class dpdf{
    
    public function buscarRecibo(){
    
        require_once('conexion.php');
        
        $query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where usuario = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($_SESSION['user']));
        $query = "SELECT * FROM public.".'"Personal"'." where ci = $1;";
        $select = pg_prepare($dbcon, "", $query);
        $select = pg_execute($dbcon, "", array(pg_fetch_assoc($prepared)['cedula']));
        $row=pg_fetch_array($select);
        
        return $row;
        
    } 
    
    public function buscarConstancia(){
        
        require_once('conexion.php');
        
        /*$query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where usuario = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($_SESSION['user']));
        $query = "SELECT * FROM public.".'"Personal"'." where ci = $1;";
        $select = pg_prepare($dbcon, "", $query);
        $select = pg_execute($dbcon, "", array(pg_fetch_assoc($prepared)['cedula']));
        $row=pg_fetch_array($select);*/
        
    }
    
}



?>