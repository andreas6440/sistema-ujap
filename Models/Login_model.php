<?php

<<<<<<< HEAD
class Login_model
{

    public function logueo($datos)
    {

        require_once "Conexion.php";
        $query    = "SELECT usuario, password FROM public." . '"Usuarios"' . " where usuario = $1 and password = $2 ;";
=======
class Login_model{ 
    
    public function logueo($datos){
        
        require_once"conexion.php";
        $query = "SELECT usuario, password FROM public.".'"Usuarios-web"'." where usuario = $1 and password = $2 ;";
>>>>>>> 3c1a3de7e109b05944a6ba328c87600cfee4521c
        $prepared = pg_prepare($dbcon, "", $query);
        $prepared = pg_execute($dbcon, "", array(
            $datos["usuario"],
            $datos["password"]));
        return $prepared;

    }
<<<<<<< HEAD

    public function registrar($datos)
    {
        $query    = "INSERT INTO public." . "Usuarios" . "(nombre, apellido, ci, email, telf, hl, sueldo, escalafon, nivel, usuario, password) VALUES (:nombre, :apellido, :ci, :email, :telf, :hl, :sueldo, :escalafon, :nivel, :usuario, :password)";
        $prepared = $pdo->prepare($query);
        $prepared->execute([
            'nombre'    => "'" . $datos["nombre"] . "'",
            'apellido'  => "'" . $datos["apellido"] . "'",
            'ci'        => "'" . $datos["ci"] . "'",
            'email'     => "'" . $datos["email"] . "'",
            'telf'      => "'" . $datos["telf"] . "'",
            'hl'        => "'" . $datos["hl"] . "'",
            'sueldo'    => "'" . $datos["sueldo"] . "'",
            'escalafon' => "'" . $datos["escalafon"] . "'",
            'nivel'     => "'" . $datos["nivel"] . "'",
            'usuario'   => "'" . $datos["usuario"] . "'",
            'password'  => "'" . $datos["password"] . "'",
        ]);

        $user = $prepared->fetch(PDO::FETCH_ASSOC);
        return $user;
=======
    
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
        
>>>>>>> 3c1a3de7e109b05944a6ba328c87600cfee4521c
    }

}
