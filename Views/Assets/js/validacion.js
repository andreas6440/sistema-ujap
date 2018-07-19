$(document).ready(function() {
<<<<<<< HEAD
=======
	function soloNumeros(tecla,nombre,numero) {
        if((tecla.charCode < 48 || tecla.charCode > 57) ||(nombre.length>numero)){            
        	return false;
        }else{
        //	$('#mensaje1').fadeOut();
        }
	}
	function validarusuario(tecla,nombre,numero){
		//(nombre.length>numero)
		if((tecla.charCode < 48 || tecla.charCode > 57) ){   
		if ((tecla.charCode < 65 || tecla.charCode > 90)) {
		if ((tecla.charCode < 97 || tecla.charCode > 122)) {

        	return false;
        }
        }
        }
	}
	function limitar(nombre,numero){
		if (nombre.length>numero) {
			return false;
		}
	}
  function soloLetras(tecla,nombre,numero){
  	if(!(tecla.charCode < 33 || tecla.charCode > 64)||(nombre.length>numero) ){            
        	return false;
        }
  }
	
	
if ($('#perfil').length) {
	$('#cedula').keypress(function(tecla) {
		var nombre=$('#cedula').val();
        var re=soloNumeros(tecla,nombre,15);
        if (re==false) {
        	return false;
        }
        $('#mensaje1').fadeOut();
    });
    $('#telefono').keypress(function(tecla) {
		var nombre=$('#telefono').val();
        var re=soloNumeros(tecla,nombre,15);
        if (re==false) {
        	return false;
        }
        $('#mensaje5').fadeOut();
    });

    $('#nombre').keypress(function(tecla) {
		var nombre=$('#nombre').val();
        var re=soloLetras(tecla,nombre,30);
        if (re==false) {
        	return false;
        }
        $('#mensaje2').fadeOut();
    });
    $('#apellido').keypress(function(tecla) {
		var nombre=$('#apellido').val();	
        var re= soloLetras(tecla,nombre,30);        
        if (re==false) {
        	return false;
        }
        $('#mensaje3').fadeOut();
    });

    
    $('#correo').keypress(function(tecla) {
		var nombre=$('#correo').val();	
        var re= limitar(nombre,30);
        if (re==false) {
        	return false;
        }
        $('#mensaje7').fadeOut();
        $('#mensaje4').fadeOut();
    });
    
    $('#Nusuario').keypress(function(tecla) {
		var nombre=$('#Nusuario').val();	
        var re= validarusuario(tecla,nombre,30);
        if (re==false) {
        	return false;
        }
        $('#mensaje6').fadeout();
    });

    $('#actualizarperfil').click(function(){
	var usuario=$('#Nusuario').val();
	var correo=$('#correo').val();
	var apellido=$('#apellido').val();
	var nombre=$('#nombre').val();
	var telefono=$('#telefono').val();
	var cedula=$('#cedula').val();
	 if (cedula=="") {
		$('#mensaje1').fadeIn();
		return false;
	}else if (nombre=="") {
		$('#mensaje2').fadeIn();
		return false;
	}else if (apellido=="") {
		$('#mensaje3').fadeIn();
		return false;
	}else if (correo=="") {
		$('#mensaje4').fadeIn();
		return false;
	}else if (telefono=="") {
		$('#mensaje5').fadeIn();
		return false;
	}else if (usuario=="") {
		$('#mensaje6').fadeIn();
		return false;
	}
	
	
});
}

>>>>>>> 780dfd35fb17395fb0530a1beece14797c8f91f3
if ($('#banner').length) {
$('#username').keypress(function(tecla) {
        if(tecla.charCode ==32) {
        
        	return false;
        }
    });
$('#password').keypress(function(tecla) {
        if(tecla.charCode ==32) return false;
    });

$('#submit').click(function(){
	var nombre=$('#username').val();
	if (nombre=="") {
		$('#mensaje1').fadeIn();
		return false;
	}
});
}
});