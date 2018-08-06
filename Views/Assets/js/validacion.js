
$(document).ready(function() {
    var num=1;
   function GuardarCambios(){

  alertify.confirm("¿Esta seguro de realizar cambios?", function(e){
        if (e) {
            $("#category-form").submit();
            alertify.success("Realizando cambios...")
            return true;
        } else {
            alertify.error("Cancelado");
            return false;
        }
    }).setHeader('<div class="brand-text brand-big "><span>Universidad José Antonio Páez </span></div>');


   }
    
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
        return true
    }
    function minimoC(nombre,numero){
        if (nombre.length<numero) {
            return false;
        }
        return true
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
        var re=soloNumeros(tecla,nombre,8);
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
        $('#mensaje8,#mensaje11').fadeOut();
    });
$('#claveNueva').keypress(function(tecla) {
        var nombre=$('#claveNueva').val();    
        var re=  limitar(nombre,25,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje9,#mensaje12,#mensaje14,#mensaje15').fadeOut();
    });
$('#claveRepetida').keypress(function(tecla) {
        var nombre=$('#claveRepetida').val();    
        var re=  limitar(nombre,25,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje10,#mensaje13,#mensaje15,#mensaje14').fadeOut();
    });
    $('#actualizarpass').click(function(){
        var conActual=$('#claveActual').val();
        var conNueva=$('#claveNueva').val();
        var conRepe=$('#claveRepetida').val();
        var resul=1;

        if (conActual=="") {              
            $('#mensaje11').fadeIn(); 
            resul=2; 
        }else{
            var re=  minimoC(conActual,3);
            if (re==false) {
            $('#mensaje8').fadeIn();
            resul=2; 
            }
        }
        if (conNueva=="") {
            $('#mensaje12').fadeIn();
            resul=2; 
        }else{
             var re=  minimoC(conNueva,8);
            if (re==false) {
            $('#mensaje9').fadeIn();
            resul=2;
            }
        }
        if (conRepe=="") {
            $('#mensaje13').fadeIn();
            resul=2; 
        }else{
            var re=  minimoC(conRepe,8);
            if (re==false) {
            $('#mensaje10').fadeIn();
            resul=2;
            }
        }
       if (resul==2) {
         return false;
       }
       
       if (conRepe!=conNueva) {
        $('#mensaje14,#mensaje15').fadeIn();
        return false;
       }
       
        if ( GuardarCambios()!=true) {
             return false;
        }

    });
    $('#actualizarperfil').click(function(){
    var usuario=$('#Nusuario').val();
    var correo=$('#correo').val();
    var apellido=$('#apellido').val();
    var nombre=$('#nombre').val();
    var telefono=$('#telefono').val();
    var cedula=$('#cedula').val();
     if (cedula=="" && nombre=="") {
        if (apellido=="" && correo=="") {
            if (telefono=="" && usuario=="") {

                 $('#mensaje1').fadeIn();
                  $('#mensaje2').fadeIn();
                  $('#mensaje3').fadeIn();
                  $('#mensaje4').fadeIn();
                  $('#mensaje5').fadeIn();
                  $('#mensaje6').fadeIn();
                    return false;
            }
        }
    }
    if (correo!="") {
      var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (!regex.test($('#correo').val().trim())) {
        
         $('#mensaje7').fadeIn();
        return false;
    }  
    }
    
        
    if ( GuardarCambios()==true) {
        
    }else{
        return false;
    }

    
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
         alertify.notify('<h6><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ERROR. Seleccione un tipo de usuario.</h6>', 'custom', 2, function(){console.log('dismissed');});
    return false;
    }

});


}


if ($('#InfoTrabajador').length) {
  

  $('#scedula').keypress(function(tecla) {
        var nombre=$('#scedula').val();
        var re=soloNumeros(tecla,nombre,8);
        if (re==false) {
            return false;
        }
         $('#mensaje1').fadeOut();
      
    });
  $('#BuCedula').click(function(){
    var cedula=$('#scedula').val();
    if (cedula=="") {
         $('#mensaje1').fadeIn();
        return false;
    }
 
  
  });

 
}
if ($('#voldi').length) {
       
 $('#telefono').keypress(function(tecla) {
        var nombre=$('#telefono').val();
        var re=soloNumeros(tecla,nombre,15);
        if (re==false) {
            return false;
        }
        $('#mensaje5,mensaje4,mensaje3,mensaje2').fadeOut();
    });

    $('#nombre').keypress(function(tecla) {
        var nombre=$('#nombre').val();
        var re=soloLetras(tecla,nombre,20);
        if (re==false) {
            return false;
        }
        $('#mensaje5,#mensaje4,#mensaje3,#mensaje2').fadeOut();
    });
    $('#apellido').keypress(function(tecla) {
        var nombre=$('#apellido').val();    
        var re= soloLetras(tecla,nombre,20);        
        if (re==false) {
            return false;
        }
        $('#mensaje5,#mensaje4,#mensaje3,#mensaje2').fadeOut();
    });

    
    $('#correo').keypress(function(tecla) {
        var nombre=$('#correo').val();  
        var re= limitar(nombre,30,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje7').fadeOut();
        $('#mensaje5,#mensaje4,#mensaje3,#mensaje2').fadeOut();
    });

$('#actualizarperfil').click(function(){
    
    var correo=$('#correo').val();
    var apellido=$('#apellido').val();
    var nombre=$('#nombre').val();
    var telefono=$('#telefono').val();
    
     if ( nombre=="" && telefono=="") {
        if (apellido=="" && correo=="") {
            

                
                  $('#mensaje2').fadeIn();
                  $('#mensaje3').fadeIn();
                  $('#mensaje4').fadeIn();
                  $('#mensaje5').fadeIn();
                 
                    return false;
            
        }
    }
    if (correo!="") {
      var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (!regex.test($('#correo').val().trim())) {
        
         $('#mensaje7').fadeIn();
        return false;
    }  
    }
    
        
    if ( GuardarCambios()!=true) {
        return false;
    }

    
});

$('#claveNueva').keypress(function(tecla) {
        var nombre=$('#claveNueva').val();    
        var re=  limitar(nombre,25,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje9,#mensaje12,#mensaje14,#mensaje15').fadeOut();
    });
$('#claveRepetida').keypress(function(tecla) {
        var nombre=$('#claveRepetida').val();    
        var re=  limitar(nombre,25,tecla);
        if (re==false) {
            return false;
        }
        $('#mensaje10,#mensaje13,#mensaje15,#mensaje14').fadeOut();
    });
 $('#actualizarpass').click(function(){        
        var conNueva=$('#claveNueva').val();
        var conRepe=$('#claveRepetida').val();
        var resul=1;

        
        if (conNueva=="") {
            $('#mensaje12').fadeIn();
            resul=2; 
        }else{
             var re=  minimoC(conNueva,8);
            if (re==false) {
            $('#mensaje9').fadeIn();
            resul=2;
            }
        }
        if (conRepe=="") {
            $('#mensaje13').fadeIn();
            resul=2; 
        }else{
            var re=  minimoC(conRepe,8);
            if (re==false) {
            $('#mensaje10').fadeIn();
            resul=2;
            }
        }
       if (resul==2) {
         return false;
       }
       
       if (conRepe!=conNueva) {
        $('#mensaje14,#mensaje15').fadeIn();
        return false;
       }
       
        if ( GuardarCambios()!=true) {
             return false;
        }

    });

 $('#NumDocumento').remove();
    
   

  
  $('select.sele').on('change',function(){
   var valor = $('#slct option:selected').html();
   var valor=$(this).val();
   if ((valor==2 || valor==5)||valor==1) {

    if (!$('.activo').length) {

    $( "#documentos" ).append( "<input class='form-control activo' type='search' name='NumDocumento' id='NumDocumento'placeholder='Nº Documento' >");
   }
   }else{  
    $('#NumDocumento').remove();
    
    
   }
   });

  $('#NumDocumento').keypress(function(tecla) {
        var nombre=$('#NumDocumento').val();
        var re=soloNumeros(tecla,nombre,8);
        if (re==false) {
            return false;
        }
         $('#mensaje11').fadeOut();
      
    });

  

    }else{
        $('#actualizarperfil').click(function(){
            alertify.notify('<h6><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ERROR. No se ha realizado la busqueda de usuario.</h6>', 'custom', 2, function(){console.log('dismissed');});
           return false;
        }
        $('#actualizarpass').click(function(){ 
             alertify.notify('<h6><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ERROR. No se ha realizado la busqueda de usuario.</h6>', 'custom', 2, function(){console.log('dismissed');});
           return false;
        }
    }
    

});