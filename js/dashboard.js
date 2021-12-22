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
$(".sortit").click(function () {
  $(".drop-down-menu").toggleClass("active");
});

$(window).on("load", function () {
  $(".preloader").fadeOut("slow");
});
