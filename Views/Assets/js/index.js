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
// ------------------------------------------------------- //
    // Search Box
    // ------------------------------------------------------ //
    $('#search').on('click', function(e) {
        e.preventDefault();
        $('.search-box').fadeIn();
    });
    $('.dismiss').on('click', function() {
        $('.search-box').fadeOut();
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
 }
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
}
 
});