<?php

class ActualizarUser{
    
    public function Perfil($datos,$user){
        
        require_once"conexion.php";
        
        if (isset($datos["cedula"])){
            $query = "UPDATE public.".'"UsuariosWeb"'." SET cedula = $1 WHERE usuario='".$user."';";
            $prepared = pg_prepare($dbcon, "", $query);
            $prepared = pg_execute($dbcon, "", array($datos["cedula"]));
        }
        
        if (isset($datos["nombre"])){
            $query = "UPDATE public.".'"UsuariosWeb"'." SET nombre = $1 WHERE usuario='".$user."';";
            $prepared = pg_prepare($dbcon, "", $query);
            $prepared = pg_execute($dbcon, "", array($datos["nombre"]));
        }
        
        if (isset($datos["apellido"])){
            $query = "UPDATE public.".'"UsuariosWeb"'." SET apellido = $1 WHERE usuario='".$user."';";
            $prepared = pg_prepare($dbcon, "", $query);
            $prepared = pg_execute($dbcon, "", array($datos["apellido"]));
        }
        
        if (isset($datos["telefono"])){
            $query = "UPDATE public.".'"UsuariosWeb"'." SET telefono = $1 WHERE usuario='".$user."';";
            $prepared = pg_prepare($dbcon, "", $query);
            $prepared = pg_execute($dbcon, "", array($datos["telefono"]));
        }
        
        if (isset($datos["email"])){
            $query = "UPDATE public.".'"UsuariosWeb"'." SET email = $1 WHERE usuario='".$user."';";
            $prepared = pg_prepare($dbcon, "", $query);
            $prepared = pg_execute($dbcon, "", array($datos["email"]));
        }
        
        return $prepared;
        
    }
    
    public function Password($datos){
        
        require_once"conexion.php";
        
        $query = "SELECT password FROM public.".'"UsuariosWeb"'." where password = $1;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array($datos["passa"]));
        
        if(isset($prepared)){
            
            if (isset($datos["pass1"])){
                
                $query = "UPDATE public.".'"UsuariosWeb"'." SET password = $1 WHERE usuario='".$_SESSION['user']."';";
                $prepared = pg_prepare($dbcon, "", $query);
                $prepared = pg_execute($dbcon, "", array($datos["pass1"]));
                
            }
            
        }
        
    }
    
    public function Password2($datos,$user){
        
        require_once"conexion.php";
        
         if (isset($datos["pass1"])){
                
            $query = "UPDATE public.".'"UsuariosWeb"'." SET password = $1 WHERE usuario='".$user."';";
            $prepared = pg_prepare($dbcon, "", $query);
            $prepared = pg_execute($dbcon, "", array($datos["pass1"]));
                
        }
            
        
    }
    
    public function FechaVisto($datos,$doc,$tipo){
        
        require"conexion.php";
        
        if($tipo==1){
            pg_update($dbcon, 'Recibos', $datos, array('id_recibo'=>$doc));
        }elseif($tipo==2){
            pg_update($dbcon, 'ARC', $datos, array('id_arc'=>$doc));
        }
        
        
    }
    
}

?>