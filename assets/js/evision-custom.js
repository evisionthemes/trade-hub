// On Document Load
jQuery(window).load(function () {
  //site loader
  jQuery('#wraploader').hide();
});

// On Document Ready
jQuery(document).ready(function ($) {


  if ($("div#main-menu").hasClass(".post-image")) {

    $(".entry-content-stat").addClass("no-image");
  }

  $('article:odd').addClass('odd');

  //hide and show nav 
  $("button#sec-menu-toggle").click(function () {
    $("div#sec-site-header-menu").slideToggle("1500");
  });
  //hide and show top nav 
  $("i.fa.fa-bars.top-nav-mobile").click(function () {
    $(".trade-hub-top-menu ul").slideToggle("1500");
  });


  //hide and show search 
  $(".nav-buttons").click(function () {
    $("#top-search").slideToggle("fast");
  });


  $('#mobile-menu-toggle-close').click(function () {
    if ($('#sec-site-header-menu').hasClass('open')) {
      $('#sec-site-header-menu').removeClass('open').css({
        'transform': 'scale(0)'
      });
    }
  });


  /**
   * sub menu script
   */
  $("li.menu-item-has-children > a").each(function () {
    $(this).append("<i class='fa fa-angle-down'></i>");
  });
  $('li.menu-item-has-children .fa').click(function (e) {
    e.preventDefault();
    $(this).siblings().toggle();
    e.stopPropagation();
  })


  // hoverdir
  jQuery(' #da-thumbs section > li ').each(function () {
    $(this).hoverdir();
  });


  // tab widget    
  $(".tabs-menu a").click(function (event) {
    event.preventDefault();
    $(this).parent().addClass("current");
    $(this).parent().siblings().removeClass("current");
    var tab = $(this).attr("href");
    $(".tab-content").not(tab).css("display", "none");
    $(tab).fadeIn(1500);
  });

//slick slider 
    $('.banner-wrapper').slick({
      slidesToShow: 1,
      dots: true,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 6000,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    }); 
  // header fix

  var fixedBackgroundColor = '#2d2d2d',
    fixedBackgroundTransparent = 'transparent',
    scrollTopPosition = $('body').scrollTop(),
    selectedHeader = $('.wrap-nav'),
    containerselectedHeader = $('.wrap-nav .container'),
    fixedBackgroundNoSlider = selectedHeader.hasClass('fixed-nav');

  var waypoint = new Waypoint({
    element: selectedHeader,
    offset: '0',
    handler: function (direction) {
      if ("down" == direction) {
        containerselectedHeader.css({
          'maxWidth': '1170px',
          'paddingLeft': '16px',
          'paddingRight': '16px'
        });
        selectedHeader.addClass('fixed-nav');
      } else {
        containerselectedHeader.css({
          'maxWidth': '1170px',
          'paddingLeft': '16px',
          'paddingRight': '16px'
        });
        selectedHeader.removeClass('fixed-nav');
      }

    }
  });

  // add toggle class to search icon
  $(".nav-buttons.col-md-1").click(function () {
    $("i.fa.fa-search").toggleClass("fa-close");
  });

  // back to top animation

  $('#gotop').click(function () {
    $('html, body').animate({
      scrollTop: '0px'
    }, 1000);
    return false;
  });

  $(window).scroll(function () {
    var scrollTopPosition = $('html, body').scrollTop();
    if (scrollTopPosition > 240) {
      $('#gotop').css({
        'bottom': 25
      });
    } else {
      $('#gotop').css({
        'bottom': -100
      });
    }
  });
});