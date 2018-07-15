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
    
    public function recibosO($inicio,$registros){

        
        require('conexion.php');
        
        $select = $this->id();
         
        $query = "SELECT * FROM public.".'"Recibos"'." where id_user = $1 ORDER BY id_recibo ASC LIMIT $registros OFFSET $inicio;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(pg_fetch_assoc($select)['id_user']));
        return $prepared;
        
    }
    
    public function recibosM($num){
        
        require('conexion.php');
        
        $query = "SELECT * FROM public.".'"Recibos"'." where id_recibo = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($num));
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
    
    public function ARCO($inicio,$registros){
        
        require('conexion.php');
        
        $select = $this->id();
        
        $query = "SELECT * FROM public.".'"ARC"'." where id_user = $1 ORDER BY id_arc ASC LIMIT $registros OFFSET $inicio;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(pg_fetch_assoc($select)['id_user']));
        return $prepared;
        
    }
    
    public function ARCM($num){
        
        require('conexion.php');
        
        $select = $this->id();
        
        $query = "SELECT * FROM public.".'"ARC"'." where id_arc = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($num));
        return $prepared;
        
    }
    
    public function fideicomiso(){
        
        require('conexion.php');
        
        $query = "SELECT * FROM public.".'"Fideicomiso"'.";";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array());
        return $prepared;
        
    }
    
    public function fideicomisoO($inicio,$registros){
        
        require('conexion.php');
        
        $query = "SELECT * FROM public.".'"Fideicomiso"'." ORDER BY id_fideicomiso ASC LIMIT $registros OFFSET $inicio;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array());
        return $prepared;
        
    }
    
    
    private function id(){
        
        require('conexion.php');
        
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