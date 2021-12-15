$(document).ready(() => {
  $("#open-sidebar").click(() => {
    // add class active on #sidebar
    $("#sidebar").addClass("active");

    // show sidebar overlay
    $("#sidebar-overlay").removeClass("d-none");
  });

  $("#sidebar-overlay").click(function () {
    // add class active on #sidebar
    $("#sidebar").removeClass("active");

    // show sidebar overlay
    $(this).addClass("d-none");
  });
});

/* >>>>> Dropdown Menu from Acompanhantes Page <<<<<<*/
$(".dropdown").click(function () {
  $(this).addClass("active");
  $(this).find(".dropdown-menu").slideDown(300);
});
$(".dropdown").focusout(function () {
  $(this).removeClass("active");
  $(this).find(".dropdown-menu").slideUp(300);
});

$(window).on("load", function () {
  $(".preloader").fadeOut("slow");
});
