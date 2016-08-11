/**
 * Website start here
 */
$(window).load(function () {
    $("#loading").hide(100);  
});
$(window).resize(function() {
   if($(window).width() > 767  ) {
        $(".header").css("min-height", $(window).height() - $(".top-header").height() - $("#mainNav").height() );
    }
});
$(document).ready(function ($) {
    $('.counter').counterUp({
         delay: 10,
        time: 1500
    });

    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      dots: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
       centerMode: true,
       centerPadding: '60px',
       slidesToScroll: 1,
       slidesToShow: 5,
       asNavFor: '.slider-for',
       focusOnSelect: true
    });

    if($(window).width() > 767  ) {
        $(".header").css("min-height", $(window).height() - $(".top-header").height() - $("#mainNav").height() );
    }
	
    $('<div id="loading"><img src="images/loading.gif" /></div>').appendTo('body');
    if($(window).width() > 768  ) {
        if ($(".frm-search-top").length > 0) {
            $(".btn-search").click(function () {
                if ($(".frm-search-top").hasClass("active")) {
                    $(".frm-search-top").removeClass("active");
                }
                else {
                    $(".frm-search-top").addClass("active");
                   
                }
            });
        }
    }

	
    if ($(".btn-top").length > 0) {
        $(window).scroll(function () {
            var e = $(window).scrollTop();
            if (e > 300) {
                $(".btn-top").show()
            } else {
                $(".btn-top").hide()
            }
        });
        $(".btn-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            })
        });
    }
    
    if ($('.mCustomScrollbar').length > 0) {
        $('.mCustomScrollbar').mCustomScrollbar({
            scrollInertia: 500
        });
    }
    if ($('.slider-ph').length > 0) {
        $('.slider-ph').flexslider({
            animation: "none"
        });
    }
    if ($(".flexslider-new").length > 0) {
        (function () {

            // store the slider in a local variable
            var $window = $(window),
                flexslider;

            // tiny helper function to add breakpoints
            function getGridSize() {
                return (window.innerWidth < 600) ? 2 :
                    (window.innerWidth < 768) ? 3 :
                        (window.innerWidth < 1080) ? 2 :
                            (window.innerWidth > 1280) ? 2 : 2;
            }


            $window.load(function () {
                $('.flexslider-new').flexslider({
                    animation: "slide",
                    animationSpeed: 400,
                    animationLoop: false,
                    slideshow: true,
                    itemWidth: 210,
                    itemMargin: 1,
                    minItems: getGridSize(), // use function to pull in initial value
                    maxItems: getGridSize(), // use function to pull in initial value
                    start: function (slider) {
                        $('body').removeClass('loading');
                        flexslider = slider;
                    }
                });
            });

            // check grid size on resize event
            $window.resize(function () {
                var gridSize = getGridSize();

                flexslider.vars.minItems = gridSize;
                flexslider.vars.maxItems = gridSize;
            });
        }());
    }
    
});
$(document).click(function () {
    $(".frm-search-top").removeClass("active");
    $(".a").removeClass("show");
    $("#a").removeClass("normal");
});
$('.frm-search-top').click(function (event) {
    event.stopPropagation();
});


