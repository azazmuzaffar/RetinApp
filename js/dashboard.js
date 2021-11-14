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
  $(this).attr("tabindex", 1).focus();
  $(this).toggleClass("active");
  $(this).find(".dropdown-menu").slideToggle(300);
});
$(".dropdown").focusout(function () {
  $(this).removeClass("active");
  $(this).find(".dropdown-menu").slideUp(300);
});
$(".dropdown .dropdown-menu li").click(function () {
  $(this).parents(".dropdown").find("span").text($(this).text());
  $(this).parents(".dropdown").find("input").attr("value", $(this).attr("id"));
});
