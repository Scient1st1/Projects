
$(window).scroll(function (event) {

    // Parallax background effect
//    $('.free_content1').css({'background-position-Y': 0 + (window.pageYOffset * 0.02) + '%'});
});


$(document).ready(function () {
// Search-Bar On Click
    $(".glyphicon-search").click(function () {
        $(".search_hold form").fadeIn();
        $("#mod_search_searchword").focus();
        $('.search_background').toggle();
//        $(this).hide();
    });
    $(".search_background").click(function () {
        $(".search_hold form").fadeOut();
        $(".search_background").hide();
        $(".glyphicon-search").removeClass("glyphicon_move");
        $(".glyphicon-search").fadeIn();
    });
    // Adding Owl-Carousel By Parent

//    $('.article_carousel').find('.modarticle-items').addClass('owl-carousel');

    $('.modarticle-items').owlCarousel({
        loop: true,
        margin: 30,
        // autoplay: true,
        lazyload: true,
        navText: false,
        nav: true,
        dots: false,

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1,
                nav: true,
                loop: true
            },
            769: {
                items: 1,
                slideBy: 1,
                nav: true,
                loop: true
            },
            1000: {
                items: 2,
                slideBy: 1,
                nav: true,
                loop: true
            }
        }
    });

    var sliderh = $('.gw_slide.actiuris img').height();
    $('.cool_images').css('height', sliderh + 'px');

    // Scroll Top
    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 700);
        return false;
    });




    var check = true;
    $('.shop_wish_list button').click(function () {
        if (check) {
            $(this).find('svg path').css({"fill": "#e65540", " stroke": "red"});
            check = false;
        } else {
            $(this).find('svg path').css({"fill": "none", " stroke": "#5C5C5C"});
            check = true;
        }
    });

//    search bar
    $('.activelang').prependTo('.lang_switcher_block');
    $('.activelang').click(function () {
        return false;
    });
//language on click

    $(".activelang").click(function () {
        $(".lang_switcher_block > a").toggleClass('clicked');

    });

    $('.videobg iframe').each(function () {
        var v = $(this).width();
        $(this).height(v / 16 * 9);
    });



//popup
    $('.personal_item_in').click(function () {
        $(this).siblings('.team_popup_overlay').fadeIn();
        $(this).siblings('.tm_popup_holder').fadeIn();
    });

    $('.team_popup_overlay').click(function () {
        $(this).fadeOut();
        $(this).siblings('.tm_popup_holder').fadeOut();
    });
    $('.image_link a').click(function (e) {
        if ($(this).attr('href') === '#') {
            e.preventDefault();
        }
    });


//arrows
//            prev
    $('.tm_prev').click(function () {
        $('body').find('.tm_popup_holder').fadeOut();
        $('body').find('.team_popup_overlay').fadeOut();

        if ($(this).parents('.personal_item').prev().find('.tm_popup_holder').length > 0) {
            $(this).parents('.mod_team .personal_item').prev().find('.team_popup_overlay').fadeIn();
            $(this).parents('.mod_team .personal_item').prev().find('.tm_popup_holder').fadeIn();
        } else {
            $(this).parents('.mod_team .personal_item').siblings('.personal_item:last-child').find('.team_popup_overlay').fadeIn();
            $(this).parents('.mod_team .personal_item').siblings('.personal_item:last-child').find('.tm_popup_holder').fadeIn();
        }
    });


//        next

    $('.tm_next').click(function () {
        $('body').find('.tm_popup_holder').fadeOut();
        $('body').find('.team_popup_overlay').fadeOut();

        if ($(this).parents('.personal_item').next().find('.tm_popup_holder').length > 0) {
            $(this).parents('.mod_team .personal_item').next().find('.team_popup_overlay').fadeIn();
            $(this).parents('.mod_team .personal_item').next().find('.tm_popup_holder').fadeIn();
        } else {
            $(this).parents('.mod_team .personal_item').siblings('.personal_item:last-child').find('.team_popup_overlay').fadeIn();
            $(this).parents('.mod_team .personal_item').siblings('.personal_item:last-child').find('.tm_popup_holder').fadeIn();
        }
    });

//                close
    $('.popup_close').click(function () {
        $(this).parent('.tm_popup_holder').fadeOut();
        $(this).parent().siblings('.team_popup_overlay').fadeOut();
    });




//social responsibility popup
    $('.image_link_inner').click(function () {
        $(this).siblings('.image_pop_overlay').fadeIn();
        $(this).siblings('.image_popup_holder').fadeIn();
    });

    $('.image_pop_overlay').click(function () {
        $(this).fadeOut();
        $(this).siblings('.image_popup_holder').fadeOut();
    });


//                close
    $('.image_popup_close').click(function () {
        $(this).parent('.image_popup_holder').fadeOut();
        $(this).parent().siblings('.image_pop_overlay').fadeOut();
    });

//arrows

    $('.img_prev').click(function () {
        $('body').find('.image_popup_holder').fadeOut();
        $('body').find('.image_pop_overlay').fadeOut();

        if ($(this).parents('.image_link').prev().find('.image_popup_holder').length > 0) {
            $(this).parents('.image_link').prev().find('.image_pop_overlay').fadeIn();
            $(this).parents('.image_link').prev().find('.image_popup_holder').fadeIn();
        } else {
            $(this).parents('.image_link').siblings('.image_link:last-child').find('.image_pop_overlay').fadeIn();
            $(this).parents('.image_link').siblings('.image_link:last-child').find('.image_popup_holder').fadeIn();
        }
    });
    

    $('.img_next').click(function () {
        $('body').find('.image_popup_holder').fadeOut();
        $('body').find('.image_pop_overlay').fadeOut();

        if ($(this).parents('.image_link').next().find('.image_popup_holder').length > 0) {
            $(this).parents('.image_link').next().find('.image_pop_overlay').fadeIn();
            $(this).parents('.image_link').next().find('.image_popup_holder').fadeIn();
        } else {
            $(this).parents('.image_link').siblings('.image_link:first-child').find('.image_pop_overlay').fadeIn();
            $(this).parents('.image_link').siblings('.image_link:first-child').find('.image_popup_holder').fadeIn();
        }
    });



//var strReplace = document.querySelector('.breadcrumbs-wrapper');
//    strReplace.innerHTML = strReplace.innerHTML.replace(/>/g,'<span></span>');
//    

//$('.simple-menu li a').click(function(){
//    $(this).removeClass('active');
//    $(this).addClass('active');
//});

    var shown = $('.rightside_in  ul li a.linkactive');
    $(shown).siblings().css('display', 'block');

    var articleh = $('.rightside_in ul').height();
   // $('.article_text').css('min-height', articleh + 'px');


//     if($(window).innerWidth < 992){
//       $('.lang_switcher_block').appenedTo($('.topline'));  
//     };


});



$(window).resize(function (event) {
    var sliderh = $('.gw_slide.actiuris img').height();
    $('.cool_images').css('height', sliderh + 'px');

});