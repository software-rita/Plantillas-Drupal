!(function ($) {
  "use strict";

  // Mobile Navigation
  if ($('.menu').length) {
    var $mobile_nav = $('.menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('#header-principal').append($mobile_nav);
    $('#header-principal').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('#header-principal').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function (e) {
      $('#header-principal').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).click(function (e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('#header-principal').hasClass('mobile-nav-active')) {
          $('#header-principal').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }
  //reload tab
  var url = document.URL;
  var hash = url.substring(url.indexOf('#'));
  $(document).ready(function () {
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
      localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if (activeTab && hash == url) {
      $('#tabs a[href="' + activeTab + '"]').tab('show');
    } else {
      $(".nav-menu ul:first li:first").addClass('active');
    }
  });

  //hash url tab 
  $(".nav-tabs").find("li a").each(function (key, val) {
    if (hash == $(val).attr('href')) {
      $(val).click();
    }
    $(val).click(function (ky, vl) {
      window.history.pushState({}, document.title, window.location.pathname);
    });
  });
  // Sobre Nosotros details carousel
  $(".members-carousel").owlCarousel({
    nav: true, // Show next and prev buttons
    navText: [
      "<div class='icon-box icon-box-principal w-100'><div class='icon'><i class='icofont-arrow-left'></i></div></div>",
      "<div class='icon-box icon-box-principal w-100'><div class='icon'><i class='icofont-arrow-right'></i></div></div>"],
    loop: true,
    autoplay: true,
    slideTransition: "linear",
    autoplayTimeout: 5000,
    autoplaySpeed: 5000,
    autoplayHoverPause: false,
    margin: 20,
    responsive: {
      0: {
        items: 1,
        stagePadding: 50
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  // history
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

  //semilleros
  $(document).ready(function () {
    // Hide all panels
    let panels = $("#semilleros_accordion > .accordion > .accordion_body").hide()

    // Hide all accordion images
    var documentos = $("#accordion_object > object").hide();
    panels.first().show();
    documentos.first().show();
    $("#semilleros_accordion .accordion .accordion_head").click(function () {
      let panel = $(this).parent(),
        tabName = panel.attr("tab-name"),
        documento = $("#" + tabName + "-documento");
      panels.slideUp();
      documentos.slideUp();
      panel.find(".accordion_body").slideDown();
      documento.slideDown();
      return false;
    });
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      disable: 'mobile'
    });
  }
  //aos inir
  $(window).on('load', function () {
    aos_init();
  });
  if ($(window).width() > 600) {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 150) {
        $('#header-principal').addClass("fixed-top")
        $("#logo").removeClass("img_visible")
      } else {
        $('#header-principal').removeClass("fixed-top")
        $("#logo").addClass("img_visible")
      }
    });
  } else {
    $('#header-principal').addClass("fixed-top")
    $("#logo").removeClass("img_visible")
  }

})(jQuery);
