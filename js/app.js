/* >>>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<  */
/* >>>>>>>>>>>>>>>> Konfidencial <<<<<<<<<<<<<<< */
/* >>>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<  */

/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */
/* >>>>>>>> All Pages - Login <<<<<<<<< */
/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */

/* Show Login Pop Up */
$(document).ready(function () {
  $(".make-login").on("click", function () {
    $(".login-to-konfidential").css("display", "block");
  });
});

/* Close Login Pop Up */
$(document).ready(function () {
  $(".--close-login--").on("click", function () {
    $(".login-to-konfidential").css("display", "none");
  });
});

/* Close Login Pop Up when click outside the target DIV */
$(document).mouseup(function (e) {
  var container = $(".inner-content");

  // if the target of the click isn't the container nor a descendant of the container
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    $(".login-to-konfidential").css("display", "none");
  }
});

/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */
/* >>>>> Ads - Make request change <<<< */
/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */

/* Show confirmation Message */
$(document).ready(function () {
  $(".make-access").on("click", function () {
    $(".request-accessed").css("display", "block");
  });
});

/* Hide confirmation Message */
$(document).ready(function () {
  $(".--close-pop-up--").on("click", function () {
    $(".request-accessed").css("display", "none");
  });
});

/* Close Request Change Pop Up when click outside the target DIV */
$(document).mouseup(function (e) {
  var container = $(".inner-content");

  // if the target of the click isn't the container nor a descendant of the container
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    $(".request-accessed").css("display", "none");
  }
});

/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */
/* >>>>>> Contact Form Submission <<<<< */
/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */

/* Show confirmation Message */
$(document).ready(function () {
  $(".enable-confirmation").on("click", function () {
    $(".--confirmation-message--").css("display", "block");
  });
});

/* Hide confirmation Message */
$(document).ready(function () {
  $(".--confirmed--").on("click", function () {
    $(".--confirmation-message--").css("display", "none");
  });
});

/* Close Login Pop Up when click outside the target DIV */
$(document).mouseup(function (e) {
  var container = $(".--content--");

  // if the target of the click isn't the container nor a descendant of the container
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    $(".--confirmation-message--").css("display", "none");
  }
});

/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */
/* >>>>>>>>>>>>>> Navbar <<<<<<<<<<<<<< */
/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */

/* Making First input "Focused" by default */
$(document).ready(function () {
  $("input:first").focus();
});

/* >>>>>>>> It will show/hide mobile menu <<<<<<<<< */
$(document).ready(function () {
  $(".open-menu").on("click", function () {
    $(".navbar").toggleClass("active");
  });
});

/* >>>>>>>> It will show search menu <<<<<<<<< */
$(document).ready(function () {
  $(".open-search").on("click", function () {
    $(".--navbar--right--").addClass("active");
    $(".--navbar--left--").addClass("fix-it");
    $("input:first").focus();
  });
});

/* >>>>>>>> It will hide search menu <<<<<<<<< */
$(document).ready(function () {
  $(".close-search").on("click", function () {
    $(".--navbar--right--").removeClass("active");
    $(".--navbar--left--").removeClass("fix-it");
  });
});

/* >>>>>>>> It will show hide dropdown on click <<<<<<<<< */
$(document).ready(function () {
  $(".drop-it").on("click", function () {
    $(this).toggleClass("active");
  });
});

/* >>>>>>>> It will show/hide languages <<<<<<<<< */
$(document).ready(function () {
  $(".lang").on("click", function () {
    $(this).toggleClass("active");
  });
});

/* Close languages dropdown when click outside the target DIV */
$(document).mouseup(function (e) {
  var container = $(".lang");

  // if the target of the click isn't the container nor a descendant of the container
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    $(".lang").removeClass("active");
  }
});

/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */
/* >>>>>>>>>>>>> Questions <<<<<<<<<<<< */
/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */

/* It will will be responsible for switching the questions */
/* when user click any of the question it will make that question active */

$(document).ready(function () {
  $(".--f-a-q--").on("click", "input", function () {
    $(".--f-a-q-- input.active").removeClass("active");
    $(this).addClass("active");
  });
});

/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */
/* >>>>>> Escorts City Dropdown <<<<<<< */
/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */

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

/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */
/* >>>>>>>> Single Escort Page <<<<<<<< */
/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */

/* Slick Crousel will only work when viewport is less than 768px */
if (window.matchMedia("(max-width: 767px)").matches) {
  /* the viewport is less than 768 pixels wide */

  var $slickEl = $(".escort-images");

  $slickEl.slick({
    centerMode: true,
    centerPadding: "0px",
    slidesToShow: 1,
    focusOnSelect: true,
    dots: true,
    infinite: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
        },
      },
    ],
  });
}

/* show Share icons by cliking share button */
$(document).ready(function () {
  $(".-show-icons").on("click", function () {
    $(".share-on").toggleClass("active");
  });
});

/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */
/* >>>>>>>>>>>> Read More <<<<<<<<<<<<< */
/* >>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<  */

$(".-read-more").click(function () {
  $(".-para").toggleClass("active");
  $(".-read-more").toggleClass("active");
  var elem = document.getElementById("switch-text");

  if (elem.innerText === "LER MAIS") {
    elem.innerText = "LER MENOS";
    console.log("dsdsd");
  } else {
    elem.innerText = "LER MAIS";
  }
});

/* >>>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<  */
/* >>>>>>>>>>>>>>>>>>>>> End <<<<<<<<<<<<<<<<<<<  */
/* >>>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<  */
