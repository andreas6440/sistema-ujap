<?php

class Login_model{ 
    
    public function logueo($datos){
        
        require_once"conexion.php";
<<<<<<< HEAD
        $query = "SELECT usuario, password FROM public.".'"UsuariosWeb"'." where usuario = $1 and password = $2 ;";
=======
        $query = "SELECT usuario, password FROM public.".'"Usuarios-web"'." where usuario = $1 and password = $2 ;";
>>>>>>> 7615fd6ea47b7796ee6f3efac7f4d18e68749667

        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(
            $datos["usuario"],
            $datos["password"]));
        return $prepared;

    }
    
    public function registrar($datos){
        
        require_once"conexion.php";
        $nivel=1;
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
            $nivel));
        return $prepared;
        

    }

}
