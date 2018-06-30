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

});