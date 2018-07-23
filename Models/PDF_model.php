<?php


class dpdf{
    
    
    public function buscarRecibo(){
        
       require('conexion.php');

        
    } 
    
    public function buscarConstanciab(){
        
        require('conexion.php');
        
        $row=$this->perfil();
        
        return $row;
        
    }
    
    public function buscarConstanciad(){
        
        require('conexion.php');
        
        $row=$this->perfil();
        
        $query = "SELECT * FROM public.".'"Materia"'." where id_user = $1 ORDER BY fecha_inicio;";
        $materias = pg_prepare($dbcon, "", $query);
        $materias = pg_execute($dbcon, "", array($row['id_user']));
        
        return $materias;
        
    }
    
    public function buscarARC(){
        
        require('conexion.php');
        
        $row=$this->perfil();
        
        return $row;
        
    }
    
    public function buscarBono(){
        
        require('conexion.php');
        
        $row=$this->perfil();
        
        return $row;
        
    }
    
    public function perfil(){
        
        require('conexion.php');
        
        $query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where usuario = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($_SESSION['user_d']));
        $query = "SELECT * FROM public.".'"Personal"'." where ci = $1;";
        $select = pg_prepare($dbcon, "", $query);
        $select = pg_execute($dbcon, "", array(pg_fetch_assoc($prepared)['cedula']));
        $row=pg_fetch_array($select);
        return $row;
        
    }
    
}



?>