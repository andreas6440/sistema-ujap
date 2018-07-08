<?php

function ActualizarPerfil(){
    
    require_once("Models/ActualizarUser_model.php");
    
    if (isset($_REQUEST['actualizarperfil'])) {

        $update_model = new ActualizarUser;
        
        if ($_POST["cedula"]!=""){
            $cedula  = $_POST['cedula'];
            $data = array("cedula" => $cedula);
        }
        
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
        
        $reg  = $update_model->Perfil($data);
        
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

?>