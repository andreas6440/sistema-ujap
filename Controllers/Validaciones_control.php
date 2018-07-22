<?php 
/**
 * 
 */
class Validacion 
{
	
	function Login_val(){
			
			if (empty($_POST['username'])&& empty($_POST['password'])) {
				return false;
			}else if (empty($_POST['username'])|| empty($_POST['password'])) {
				return false;
			}else{
				return true;
			}
	}
}

 ?>