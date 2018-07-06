<?php

class bdoc{
    
     public function recibos(){

        
        require('conexion.php');
        
        $select = $this->id();
         
        $query = "SELECT * FROM public.".'"Recibos"'." where id_user = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(pg_fetch_assoc($select)['id_user']));
        return $prepared;
        
    }
    
    public function ARC(){
        
        require('conexion.php');
        
        $select = $this->id();
        
        $query = "SELECT * FROM public.".'"ARC"'." where id_user = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(pg_fetch_assoc($select)['id_user']));
        return $prepared;
        
    }
    
    
    private function id(){
        
        require('conexion.php');
        session_start();
        
        $query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where usuario = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($_SESSION['user']));
        $query = "SELECT id_user FROM public.".'"Personal"'." where ci = $1;";
        $select = pg_prepare($dbcon, "", $query);
        $select = pg_execute($dbcon, "", array(pg_fetch_assoc($prepared)['cedula']));
        return $select;
        
    }
    
}

?>