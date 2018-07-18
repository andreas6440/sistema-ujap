$(document).ready(function() {
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