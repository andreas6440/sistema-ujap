<?php

class Login_model{ 
    
    public function logueo($datos){
        
        require_once"conexion.php";
        $query = "SELECT usuario, password FROM public.".'"Usuarios-web"'." where usuario = $1 and password = $2 ;";

        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(
            $datos["usuario"],
            $datos["password"]));
        return $prepared;

    }
    
    public function registrar($datos){
        
        require_once"conexion.php";
        $query = "INSERT INTO public.".'"Usuarios-web"'."(usuario, password, cedula, nombre, apellido, telefono, email) VALUES ($1, $2, $3, $4, $5, $6, $7);";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(
            $datos["usuario"],
            $datos["password"],
            $datos["cedula"],
            $datos["nombre"],
            $datos["apellido"],
            $datos["telefono"],
            $datos["email"]));
        return $prepared;
        

    }

}
