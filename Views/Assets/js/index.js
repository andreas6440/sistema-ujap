$(document).ready(function() {
/*=============================
	Para abrir y cerrar SideBar
  =============================*/
$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
  $('.opcion').show();
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
  $('.opcion').hide();
});

/*===============================
            DropDown
  ===============================*/
$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});
var $alto=$( '.card-body' ).height();

if ($alto<200) {
  $("footer").css({"position":"fixed"});
 }/*
if ($('#banner').length) {
   $("html").css({"overflow":"hidden"});
/*==================================
            abrir panel dos
      ==================================*/
    var panelOne = $('.form-panel.two').height(),
        panelTwo = $('.form-panel.two')[0].scrollHeight;
    $('.form-panel.two').not('.form-panel.two.active').on('click', function(e) {
        e.preventDefault();
        $('.form-toggle').addClass('visible');
        $('.form-panel.one').addClass('hidden');
        $('.form-panel.two').addClass('active');
        $('.form').animate({
            'height': panelTwo
        }, 200);
    });

    
    /*==================================
            activar panel
      ==================================*/
    $('.form-toggle').on('click', function(e) {
        e.preventDefault();
        $(this).removeClass('visible');
        $('.form-panel.one').removeClass('hidden');
        $('.form-panel.two').removeClass('active');
        $('.form').animate({
            'height': panelOne
        }, 200);
    });
}else{
 $("html").css({"overflow":"auto"});
}*/
/*
if ($('#InfoTrabajador').length) {
$('#NumDocumento').remove();
    
    $('#Burecibo').remove();

  
  $('select.sele').on('change',function(){*/
   /* var valor = $('#sele option:selected').html();*//*
   var valor=$(this).val();
   if (valor==2 || valor==5) {
    if (!$('.activo').length) {
    $( "#documentos" ).append( "<input class='form-control activo' type='search' name='NumDocumento' id='NumDocumento'placeholder='Nº Documento' >");
    $( "#documentos" ).append( '<input type="submit" id="Burecibo" name="Burecibo" class="btn color-azul btn-submit btn-lg activo" value="Buscar">'); 
   }
   }else{  
    $('#NumDocumento').remove();
    
    $('#Burecibo').remove();
   }
});
}*/

  $('#OlClave').click(function() {
   var closable = alertify.alert().setting('closable');

alertify.alert()
  .setting({
    'label':'Ok',
    'message': '<div class="gru-minuscula">En caso de haber olvidado su contraseña, favor dirigirse a la oficina de redes para su posterior reestablecimiento.<div>' ,
    'onok': function(){ alertify.success('excelente');}
  }).show().setHeader('<div class="brand-text brand-big "><span>Universidad José Antonio Páez </span></div>');; });
});