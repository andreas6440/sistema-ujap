
$(document).ready(function() {
  
    
    function soloNumeros(tecla,nombre,numero) {
        if((tecla.charCode < 48 || tecla.charCode > 57) ||(nombre.length>numero)){            
            return false;
        }
    }
    function validarusuario(tecla,nombre,numero){
        if (nombre.length>numero||tecla.charCode ==32) {
            return false;
        }
        if((tecla.charCode < 48 || tecla.charCode > 57) ){   
        if ((tecla.charCode < 65 || tecla.charCode > 90)) {
        if ((tecla.charCode < 97 || tecla.charCode > 122)) {
        
        }
        }
        }
    }
    function limitar(nombre,numero,tecla){
        if (nombre.length>numero||tecla.charCode ==32) {
            return false;
        }
    }
    function minimo(nombre,numero,tecla){
        if (nombre.length<numero||tecla.charCode ==32) {
            return false;
        }
    }
  function soloLetras(tecla,nombre,numero){
    if(!(tecla.charCode < 33 || tecla.charCode > 64)||((nombre.length>numero)||(tecla.charCode ==32)) ){  

            return false;
        }
  }
    
    
if ($('#perfil').length) {
    /*=====perfil=====*/
    
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
        var re=soloLetras(tecla,nombre,20);
        if (re==false) {
            return false;
        }
        $('#mensaje2').fadeOut();
    });
    $('#apellido').keypress(function(tecla) {
        var nombre=$('#apellido').val();    
        var re= soloLetras(tecla,nombre,20);        
        if (re==false) {
            return false;
        }
        $('#mensaje3').fadeOut();
    });

    
    $('#correo').keypress(function(tecla) {
        var nombre=$('#correo').val();  
        var re= limitar(nombre,30,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje7').fadeOut();
        $('#mensaje4').fadeOut();
    });
    
    $('#Nusuario').keypress(function(tecla) {
        var nombre=$('#Nusuario').val();    
        var re= validarusuario(tecla,nombre,15);
        if (re==false) {
            return false;
        }
        $('#mensaje6').fadeout();
    });
   
/*====clave=====*/
$('#NclaveActual').keypress(function(tecla) {
        var nombre=$('#claveActual').val();    
        var re=  limitar(nombre,25,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje8,#mensaje11').fadeout();
    });
$('#claveNueva').keypress(function(tecla) {
        var nombre=$('#claveNueva').val();    
        var re=  limitar(nombre,25,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje9,#mensaje12').fadeout();
    });
$('#claveRepetida').keypress(function(tecla) {
        var nombre=$('#claveRepetida').val();    
        var re=  limitar(nombre,25,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje10,#mensaje13').fadeout();
    });
    $('#actualizarpass').click(function(){
        var conActual=$('#claveActual').val();
        var conNueva=$('#claveNueva').val();
        var conRepe=$('#claveRepetida').val();
        if (conActual=="") {
        $('#mensaje11').fadeIn();
        return false;
        }else{
            var re=  minimo(nombre,8);
            if (re==false) {
            $('#mensaje8').fadeIn();
            return false;
            }
            
        }
        if (conNueva=="") {
        $('#mensaje12').fadeIn();
        return false;
        }else{
            var re=  minimo(nombre,8);
            if (re==false) {
            $('#mensaje9').fadeIn();
            return false;
            }
           
        }
        if (conRepe=="") {
        $('#mensaje13').fadeIn();
        return false;
        }else{
            var re=  minimo(nombre,8);
            if (re==false) {
            $('#mensaje10').fadeIn();
            return false;
            }
            
        }

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
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (!regex.test($('#correo').val().trim())) {
        
         $('#mensaje7').fadeIn();
        return false;
    }
    /*
var resul=false;
  alertify.confirm("¿Esta seguro de realizar cambios?", function(e){
        if (e) {
            $("#category-form").submit();
            alertify.success("Realizando cambios...")
            resul=true;
        } else {
            alertify.error("Cancelado");
            resul=false;
        }
    }).setHeader('<div class="brand-text brand-big "><span>Universidad José Antonio Páez </span></div>');
    
    
*/
    
});
}

if ($('#banner').length) {

$('#username').keypress(function(tecla) {
    var nombre=$('#username').val();   
     var re= validarusuario(tecla,nombre,15);
        if (re==false) {
            return false;
        }
        $('#mensaje1').fadeOut();
    });
$('#password').keypress(function(tecla) {
    var password=$('#password').val();
var re=  limitar(password,25,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje2').fadeOut()

    });

$('#submit').click(function(){
    

    var nombre=$('#username').val();
    var password=$('#password').val();
    if (nombre=="" && password=="") {
        $('#mensaje1').fadeIn();
        $('#mensaje2').fadeIn();
        return false;
    }
     if (nombre=="") {
        $('#mensaje1').fadeIn();
        return false;
    }
     if (password=="") {
        $('#mensaje2').fadeIn();
        return false;
    }
    /*
    var re=  minimo(password,8);
            if (re==false) {
            $('#mensaje21').fadeIn();
            return false;
            }*/

});

function inicioIncorrecto(){
 alertify.error('Usuario o contraseña invalida');   
}



}

if ($('#nivelacceso').length) {
    
 $("html").css({"overflow":"hidden"});
$('#submit').click(function(){
   var valor= $('input:radio[name=radio]:checked').val();

    if (valor==null) {
         //using custom CSS
 // .ajs-message.ajs-custom { color: #31708f;  background-color: #d9edf7;  border-color: #31708f; }
 alertify.notify('<h6><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ERROR. Seleccione un tipo de usuario.</h6>', 'custom', 2, function(){console.log('dismissed');});
    return false;
    }

});


}

});