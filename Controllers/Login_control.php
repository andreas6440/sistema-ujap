<?php

class Login_control
{

    public function login()
    {

        require_once "Views/Plantilla.php";
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
            /*if(isset($_POST['username'])){
        $usuario = $_POST['username'];
        $password = $_POST['password'];
        $data = array("usuario"=>$usuario, "passwort"=>$password);
        $log = $login_model->logueo($data);
        }else{
        $usuario = $_POST['username-r'];
        $ci = $_POST['cedula'];
        $password = $_POST['password-r'];
        $email = $_POST['email'];
        $data = array("usuario"=>$usuario, "passwort"=>$password);
        $log = $login_model->logueo($data);
        } */
        }
    }

}
