$(document).ready(function () {
  menuResize();
  //removeLink();
  contactHeight();

  $('#syllabus-btn').click(function () {
    event.preventDefault();
    $('#syllabus-modal').modal('show');
  })
});

$(".burger-btn").click(function () {
  var isActive = $(".nav-menu").hasClass("nav-menu-active");
  if (!isActive) {
    $(".nav-menu").addClass("nav-menu-active");
    $("body").css("overflow-y", "hidden");
    $(".line-1").addClass("line-1-on");
    $(".line-2").addClass("line-2-on");
    $(".line-3").addClass("line-3-on");
    $(".close-indc").fadeIn();
  } else {
    $(".nav-menu").removeClass("nav-menu-active");
    $("body").css("overflow-y", "auto");
    $(".sub-menu").removeClass("sub-menu-active");

    $(".line-1").removeClass("line-1-on");
    $(".line-2").removeClass("line-2-on");
    $(".line-3").removeClass("line-3-on");
  }
});

$(".close-btn").click(function () {
  var isActive = $(".nav-menu").hasClass("nav-menu-active");
  if (isActive) {
    $(".nav-menu").removeClass("nav-menu-active");
    $("body").css("overflow-y", "auto");
    $(".sub-menu").removeClass("sub-menu-active");

    $(".line-1").removeClass("line-1-on");
    $(".line-2").removeClass("line-2-on");
    $(".line-3").removeClass("line-3-on");
  }
});

$(".has-sub-menu").hover(function () {
  const targetClass = $(this).children('div .sub-menu');
  if (!targetClass.hasClass("sub-menu-active")) {
    targetClass.addClass("sub-menu-active");
  } else {
    targetClass.removeClass("sub-menu-active");
  }
});

$(window).resize(function () {
  menuResize();
  //removeLink();
});

const menuResize = () => {
  //console.log($(window).width());
  if ($(window).width() > 767) {
    var h;
    h = $(".main-menu").innerWidth() + 40;
    //$(".sub-menu").css("margin-left", h + "px");
  }
};

$(".sub-menu-content").click(function () {
  var child = $(this).children(".child-content");
  //console.log(child);
  if (!child.hasClass("child-content-active")) {
    $(".child-content").removeClass("child-content-active");
    child.addClass("child-content-active");
  } else {
    child.removeClass("child-content-active");
  }
});

// function removeLink() {
//   if ($(window).width() <= 767) {
//     $(".our-course").attr("href", "#");
//     $('#PILOT-TRAINING').attr("href", "#");
//     $('#CABIN-CREW').attr("href", "#");
//     $('#AIRPORT-OPRETION').attr("href", "#");
//     $('#AVIONICS').attr("href", "#");
//   } else {
//     if (window.location.pathname.split('/')[2] == 'courses') {
//       $(".our-course").attr("href", "../program");
//       $('#PILOT-TRAINING').attr("href", "../pilot-training");
//       $('#CABIN-CREW').attr("href", "../school-of-cabin-crew");
//       $('#AIRPORT-OPRETION').attr("href", "../airport-operations-secrity");
//       $('#AVIONICS').attr("href", "../avionics-mro");
//     } else {
//       $(".our-course").attr("href", "program");
//       $('#PILOT-TRAINING').attr("href", "pilot-training");
//       $('#CABIN-CREW').attr("href", "school-of-cabin-crew");
//       $('#AIRPORT-OPRETION').attr("href", "airport-operations-secrity");
//       $('#AVIONICS').attr("href", "avionics-mro");
//     }
//   }
// }



function handleChangeForm(value, name) {
  console.log(name);
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (value.match(mailformat)) {
    console.log("true");
  } else {
    console.log("false");
  }
}

function contactHeight() {
  var h = $('.cadd').innerHeight();
  if ($(window).width() >= 767) {
    $('.cff').css('height', h + 'px');
  }
}

//close menu when click outside menu
var mouse_is_inside = false;

$(document).ready(function () {
  $('.nav-menu').hover(function () {
    mouse_is_inside = true;
  }, function () {
    mouse_is_inside = false;
  });

  $("body").mouseup(function () {
    if (!mouse_is_inside) {
      var isActive = $(".nav-menu").hasClass("nav-menu-active");
      if (isActive) {
        $(".nav-menu").removeClass("nav-menu-active");
        $("body").css("overflow-y", "auto");
        $(".sub-menu").removeClass("sub-menu-active");

        $(".line-1").removeClass("line-1-on");
        $(".line-2").removeClass("line-2-on");
        $(".line-3").removeClass("line-3-on");
      }
    }
  });
});