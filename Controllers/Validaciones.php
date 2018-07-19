<?php 
/**
 * 
 */
class Validacion 
{
	
	function Login_val(){
			
			if (empty($_POST['username'])&& empty($_POST['password'])) {
				return false;
			}elseif (empty($_POST['username'])|| empty($_POST['password'])) {
				return false;
			}else{
				return true;
			}
	}
	function Actualizar(){
		if (empty($_POST["email"])) {
    		$emailErr = "Correo Electronico requerido";
       	} else {
    		$email = test_input($_POST["email"]);
    		echo $email;
  		}
	}
}

 ?>