<?php


class dpdf{
    
    
    public function buscarRecibo(){
        
       require('conexion.php');
        
        $iduser = $this->iduser();
        $query = "SELECT conceptos FROM public.".'"Recibos"'." where id_user = $1 and id_recibo= $2;";
        $conceptos = pg_prepare($dbcon, "", $query);
        $conceptos = pg_execute($dbcon, "", array($iduser,$_SESSION['id_doc']));
        
        return pg_fetch_assoc($conceptos)['conceptos'];
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
        
        $iduser = $this->iduser();
        
        $query = "SELECT total FROM public.".'"BonoAlimenticio"'." where id_user = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($iduser));
        
        return pg_fetch_assoc($prepared)['total'];;
        
    }
    
    public function buscarFideicomiso(){
        
        require('conexion.php');
        
        
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
    
    public function departamento(){
        
        require('conexion.php');
        
        $iduser = $this->iduser();
        
        $query = "SELECT departamento_id FROM public.".'"Departamento_Personal"'." where personal_id = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($iduser));
        
        $query = "SELECT nombre FROM public.".'"Departamento"'." where id = $1;";
        $select = pg_prepare($dbcon, "", $query);
        $select = pg_execute($dbcon, "", array(pg_fetch_assoc($prepared)['departamento_id']));
        
        return pg_fetch_assoc($select)['nombre'];
    }
    
    public function escalafon(){
        
        require('conexion.php');
        
        $row=$this->perfil();
        
        $query = "SELECT nombre FROM public.".'"Escalafon"'." where id = $1;";
        $select = pg_prepare($dbcon, "", $query);
        $select = pg_execute($dbcon, "", array($row['id_escalafon']));
        
        return pg_fetch_assoc($select)['nombre'];
    }
    
    public function iduser(){
        
        require('conexion.php');
        
        $query = "SELECT cedula FROM public.".'"UsuariosWeb"'." where usuario = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($_SESSION['user_d']));
        
        $query = "SELECT id_user FROM public.".'"Personal"'." where ci = $1;";
        $select = pg_prepare($dbcon, "", $query);
        $select = pg_execute($dbcon, "", array(pg_fetch_assoc($prepared)['cedula']));
        
        return pg_fetch_assoc($select)['id_user'];
    }
    
}



?>