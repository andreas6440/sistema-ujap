<?php

class Login_model{ 
    
    public function logueo($datos){
        
        require"conexion.php";
        $query = "SELECT usuario, password, nivel FROM public.".'"UsuariosWeb"'." where usuario = $1 and password = $2 ;";

        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(
            $datos["usuario"],
            $datos["password"]));
        return $prepared;

    }
    
    public function registrar($datos){
        
        require"conexion.php";
        $query = "INSERT INTO public.".'"UsuariosWeb"'."(cedula, usuario, password, nombre, apellido, telefono, email, nivel) VALUES ($1, $2, $3, $4, $5, $6, $7, $8);";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(
            $datos["cedula"],
            $datos["usuario"],
            $datos["password"],
            $datos["nombre"],
            $datos["apellido"],
            $datos["telefono"],
            $datos["email"],
            $datos["nivel"]));
        return $prepared;
        

    }

}
