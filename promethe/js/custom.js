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

    $('.blog_modul_in').owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        lazyload: true,
        navText: false,
        nav: true,
        dots: false,

        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1,
                nav: false,
                loop: true
            },
            769: {
                items: 3,
                slideBy: 1,
                nav: false,
                loop: true
            },
            1000: {
                items: 3,
                slideBy: 1,
                nav: false,
                loop: true
            }
        }
    });

    var sliderh = $('.gw_slide.actiuris img').height();
    $('.cool_images').css('height', sliderh + 'px');


//    search bar
    $('.activelang').prependTo('.lang_switcher_block');
    $('.activelang').click(function () {
        return false;
    });
    
//language on click

    $(".activelang").click(function () {
        $(".lang_switcher_block > a").toggleClass('clicked');

    });


//    var src = $('.gw_slide.n0 .gw_slide_fix img').attr('src');
//    var src1 = $('.gw_slide.n1 .gw_slide_fix img').attr('src');
//    var src2 = $('.gw_slide.n2 .gw_slide_fix img').attr('src');
//    var src3 = $('.gw_slide.n3 .gw_slide_fix img').attr('src');

//
//
//    $('.cslider-controlNav .n0').css('background', 'url(' + src + ')');
//    $('.cslider-controlNav .n1').css('background', 'url(' + src1 + ')');
//    $('.cslider-controlNav .n2').css('background', 'url(' + src2 + ')');
//    $('.cslider-controlNav .n3').css('background', 'url(' + src3 + ')');
//  
var src=0;
$('.gw_slide').each(function(){
  
   $('.cslider-controlNav .n'+src).css('background', 'url(' + $('.gw_slide_fix img',this).attr('src')+ ')');
    src++;
});


//var act = $('.gw_slide.actiuris .slider_title a');
//$('.gw_slide.actiuris .slider_text .slider_text_in .slider_title a');
//var href = $(this).attr('href');

$('.little_cover').append($('.nosliderbody .page_title'));



        
        

});



$(window).resize(function (event) {
    var sliderh = $('.gw_slide.actiuris img').height();
    $('.cool_images').css('height', sliderh + 'px');

});