
$(document).ready(function() {
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
	
	function validarCorreo(correo){

    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (regex.test(correo.val().trim())) {
        return true;

    } else {
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
    });
    $('#telefono').keypress(function(tecla) {
		var nombre=$('#telefono').val();
        var re=soloNumeros(tecla,nombre,15);
        if (re==false) {
        	return false;
        }
    });

    $('#nombre').keypress(function(tecla) {
		var nombre=$('#nombre').val();
        var re=soloLetras(tecla,nombre,30);
        if (re==false) {
        	return false;
        }
    });
    $('#apellido').keypress(function(tecla) {
		var nombre=$('#apellido').val();	
        var re= soloLetras(tecla,nombre,30);        
        if (re==false) {
        	return false;
        }
    });

    
    $('#correo').keypress(function(tecla) {
		var nombre=$('#correo').val();	
        var re= limitar(nombre,30);
        if (re==false) {
        	return false;
        }
    });
    
    $('#Nusuario').keypress(function(tecla) {
		var nombre=$('#Nusuario').val();	
        var re= validarusuario(tecla,nombre,30);
        if (re==false) {
        	return false;
        }
    });
}

if ($('#banner').length) {
$('#username').keypress(function(tecla) {
	var nombre=$('#username').val().length;
        if(tecla.charCode ==32 ||nombre>25) {            
        	return false;
        }else{
        	$('#mensaje1').fadeOut();
        }
    });
$('#password').keypress(function(tecla) {
	var password=$('#password').val().length;

        if(tecla.charCode ==32 || password>25) {
        	return false;
        }else{
        	$('#mensaje21').fadeOut();
        	$('#mensaje2').fadeOut();
        }



    });

$('#submit').click(function(){
	var nombre=$('#username').val();
	var password=$('#password').val();
	if (nombre=="" && password=="") {
		$('#mensaje1').fadeIn();
		$('#mensaje2').fadeIn();
		return false;
	}else if (nombre=="") {
		$('#mensaje1').fadeIn();
		return false;
	}else if (password=="") {
		$('#mensaje2').fadeIn();
		return false;
	}
	if (password.length<8) {
$('#mensaje21').fadeIn();
		return false;
	}
});

function inicioIncorrecto(){
 alertify.error('Usuario o contraseña invalida'); 	
}



}




});