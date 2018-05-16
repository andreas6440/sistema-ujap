<?php

class Login_control
{

    public function login()
    {

        require_once "Views/Login.php";
    }

/*Alcides estuvo aqui*/

    public function loguear()
    {

        require_once "Models/Login_model.php";

        $login_model = new Login_model;

        if (isset($_REQUEST['submit'])) {
            $usuario  = $_POST['username'];
            $password = $_POST['password'];
            $data     = array("usuario" => $usuario, "password" => $password);
            $log      = $login_model->logueo($data);
            return $log;
        }
            
        if (isset($_REQUEST['registrar'])) {
            $usuario  = $_POST['username-r'];
            $password = $_POST['password-r'];
            $cedula  = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $apellido  = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $data     = array("usuario" => $usuario, "password" => $password, "cedula" => $cedula, "nombre" => $nombre, "apellido" => $apellido, "telefono" => $telefono, "email" => $email);
            $reg      = $login_model->registrar($data);
        }
    }

}