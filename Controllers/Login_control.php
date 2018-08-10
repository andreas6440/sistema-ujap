<?php

class Login_control
{

    public function login()
    {

        require_once "Views/Login.php";
    }

    public function loguear(){

        require_once "Models/Login_model.php";

        $login_model = new Login_model;

        if (isset($_REQUEST['submit'])&& isset($_POST['submit'])) {
            $usuario  = $_POST['username'];
            $password = md5($_POST['password']);
            $data     = array("usuario" => $usuario, "password" => $password);
            $log      = $login_model->logueo($data);
            $log2 = $login_model->logueo($data);

            
            if(isset($log)){
                
                while ($row = pg_fetch_assoc($log)) {

                    $_SESSION['user'] = $row['usuario'];
                    if(isset($_SESSION['user'])){
                        
                        $_SESSION['nivel']=$row['nivel'];
                        if($row['nivel']==1){
                            $_SESSION['rut']='Perfil';
                            $_SESSION['opcion']=1;
                            $_SESSION['user_d']=$_SESSION['user'];
                        }else{
                            $_SESSION['rut']='Acceso';
                            $_SESSION['opcion']=0;
                        }

                        echo '<meta http-equiv="Refresh" content="0;URL=index.php">';
                    }
                } 
                $row = pg_fetch_assoc($log2);
                if ($row==false) {
                    echo '<div class=" my-2">
                          <label style="color:#DF0101"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Usuario o Contraseña incorrecta</label>
                          <div>';
                    return false;
                }    
            }

        }
            
    }
    
    public function registrar(){
        
        require_once "Models/Login_model.php";
        
        $login_model = new Login_model;
        
        if (isset($_REQUEST['registrar'])) {
            $usuario  = $_POST['username-r'];
            $password = md5($_POST['password-r']);
            $cedula  = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $apellido  = $_POST['apellido'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $nivel = $_POST['nivel'];
            $data     = array("usuario" => $usuario, "password" => $password, "cedula" => $cedula, "nombre" => $nombre, "apellido" => $apellido, "telefono" => $telefono, "email" => $email, "nivel" => $nivel);
            $reg      = $login_model->registrar($data);
            
        }
        
    }

}
