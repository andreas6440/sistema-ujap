<?php

class Login_model{ 
    
    public function logueo($datos){
        
        require_once"conexion.php";
        $query = "SELECT usuario, password FROM public.".'"Usuarios"'." where usuario = $1 and password = $2 ;";
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(
            $datos["usuario"],
            $datos["password"]));
        return $prepared;
            
    }
    
    public function registrar($datos){
        $query = "INSERT INTO public."."Usuarios"."(nombre, apellido, ci, email, telf, hl, sueldo, escalafon, nivel, usuario, password) VALUES (:nombre, :apellido, :ci, :email, :telf, :hl, :sueldo, :escalafon, :nivel, :usuario, :password)";
        $prepared = $pdo->prepare($query);
        $prepared->execute([
            'nombre' => "'".$datos["nombre"]."'",
            'apellido' => "'".$datos["apellido"]."'",
            'ci' => "'".$datos["ci"]."'",
            'email' => "'".$datos["email"]."'",
            'telf' => "'".$datos["telf"]."'",
            'hl' => "'".$datos["hl"]."'",
            'sueldo' => "'".$datos["sueldo"]."'",
            'escalafon' => "'".$datos["escalafon"]."'",
            'nivel' => "'".$datos["nivel"]."'",
            'usuario' => "'".$datos["usuario"]."'",
            'password' => "'".$datos["password"]."'"
        ]);
        
        $user = $prepared->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    
}


?>