//sticky navbar
var num = 0;
$(window).bind('scroll', function () {
    if (window.innerWidth > 668)
        if ($(window).scrollTop() > 230) {
            $('.header_bot').addClass('fixed');
        } else {
            $('.header_bot').removeClass('fixed');
        }
});
//sticky end
//
//sticky v2
//   if (window.innerWidth > 768) {
//        $(window).scroll(function () {
//            if ($(window).scrollTop() > $('.header_top, .header_mid').height() ) {
//                $('.header_bot').addClass('fixed');
//            }
//            if ($(window).scrollTop() < $('.header_top').height() + 20) {
//                $('.header_bot').removeClass('fixed');
//            }
//        });
//    }
//sticky version 2 end
$(window).scroll(function (event) {

// Parallax background effect
    $('.free_content1').css({'background-position-Y': 0 + (window.pageYOffset * 0.02) + '%'});
});
$(document).ready(function () {

// Search-Bar On Click
    $(".glyphicon-search").click(function () {
        $(".search_hold form").toggleClass("display_block");
        $("#mod_search_searchword").focus();
        $('.search_background').toggle();
        $(this).hide();
    });
    $(".search_background").click(function () {
        $(".search_hold form").removeClass("display_block");
        $(".search_background").hide();
        $(".glyphicon-search").removeClass("glyphicon_move");
        $(".glyphicon-search").fadeIn();
    });
    // Adding Owl-Carousel By Parent

//    $('.article_carousel').find('.modarticle-items').addClass('owl-carousel');

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        navText: false,
        responsiveClass: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true
            },
            600: {
                items: 2,
                nav: true,
                loop: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });


    // F.A.Q
//        $('.question_item').find('.question').click(function () {
//if ($(this).parent('.question_item').hasClass('active_question')) {
//$(this).parent('.question_item').removeClass('active_question');
//} else {
//$('body').find('.question_item').removeClass('active_question');
//        $(this).parent('.question_item').addClass('active_question');
//}
//});
    // F.A.Q End

    var sliderh = $('.gw_slide img').height();
    $('.cool_images').css('height', sliderh + 'px');
});
$(window).resize(function (event) {
    var sliderh = $('.gw_slide img').height();
    $('.cool_images').css('height', sliderh + 'px');
});