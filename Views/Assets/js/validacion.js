if ($('#banner').length) {
$('#username').keypress(function(tecla) {
        if(tecla.charCode ==32) {
        
        	return false;
        }
    });
$('#password').keypress(function(tecla) {
        if(tecla.charCode ==32) return false;
    });

}