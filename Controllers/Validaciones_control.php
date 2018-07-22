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
}

 ?>