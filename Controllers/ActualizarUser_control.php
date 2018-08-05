<?php

function ActualizarPerfil($user){
    
    require_once("Models/ActualizarUser_model.php");
    
    if (isset($_REQUEST['actualizarperfil'])) {

        $update_model = new ActualizarUser;
        
        if ($_POST["nombre"]!=""){
            $nombre = $_POST['nombre'];
            if(!isset($data)){
                $data = array("nombre" => $nombre);
            }else{
               $data = array("nombre" => $nombre)+$data;
            }
        }
        
        if ($_POST["apellido"]!=""){
            $apellido  = $_POST['apellido'];
            if(!isset($data)){
                 $data = array("apellido" => $apellido);
            }else{
                $data = array("apellido" => $apellido)+$data;
            }
           
        }
        
        if ($_POST["telefono"]!=""){
            $telefono = $_POST['telefono'];
            if(!isset($data)){
                 $data = array("telefono" => $telefono);
            }else{
                $data = array("telefono" => $telefono)+$data;
            }
            
        }
        
        if ($_POST["email"]!=""){
            $email = $_POST['email'];
            if(!isset($data)){
                 $data = array("email" => $email);
            }else{
                 $data = array("email" => $email)+$data;
            }
            
        }
        
        if(isset($_POST["nivel"])){
            if ($_POST["nivel"]!=""){
                $nivel = $_POST['nivel'];
                if(!isset($data)){
                     $data = array("nivel" => $nivel);
                }else{
                     $data = array("nivel" => $nivel)+$data;
                }

            }
        }
        
        
       if(isset($data)){
          $reg  = $update_model->Perfil($data,$user); 
       } 
        
    }
    
}

function ActualizarPassword(){
    
    require_once("Models/ActualizarUser_model.php");
    
    $update_model = new ActualizarUser;
    
    if (isset($_REQUEST['actualizarpass'])) {
        
        if($_POST['pass1']==$_POST['pass2']){
            
            $passa = $_POST['passa'];
            
            $pass1 = md5($_POST['pass1']);
            
            $data = array("passa" => $passa, "pass1" => $pass1,);

            $reg  = $update_model->Password($data);            
            
        }

        
    }
     

    
}

function ActualizarPassword2($user){
    
    require_once("Models/ActualizarUser_model.php");
    
    $update_model = new ActualizarUser;
    
    if (isset($_REQUEST['actualizarpass'])) {
        
        if($_POST['pass1']==$_POST['pass2']){
            
            $pass1 = md5($_POST['pass1']);
            
            $data = array("pass1" => $pass1);
            
            $reg  = $update_model->Password2($data,$user);
            
        }
        
    }
    
}

function ActualizarFirma(){
    
    require_once("Models/Firma_model.php");
    
    if (isset($_REQUEST['firma'])) {
        
        $nombre = $_POST['nombre'];
        
        $apellido = $_POST['apellido'];
        
        $cedula = $_POST['ci'];
            
        $data = array("nombre" => $nombre, "apellido" => $apellido, "cedula" => $cedula);
        
        actualizarFirmam($data);
        
    }
}

?>