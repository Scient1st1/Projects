//*****************owl-carousel***************************/

$('#loader').fadeOut(1500);

$(document).ready(function () {
    var body = $('body');
    if (body.hasClass('home')) {
        $('.item-text').first().children().addClass('animate__animated animate__fadeInUp');
        var owl = $('.main-products');
        owl.owlCarousel({
            items: 1,
            loop: true,
            rewind: true,
            autoplay: false,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<div class='nav-button owl-prev'>&#8592;</div>", "<div class='nav-button owl-next'>&#8594;</div>"],
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    loop: true,
                    autoplay: false,
                    autoplayHoverPause: false,
                },
                800: {
                    items: 1,
                    margin: 0,
                    autoplayTimeout: 5000,

                },
                1200: {
                    autoplay: true,
                    autoplayTimeout: 5000,
                }
            }
        });
        owl.on('change.owl.carousel', function (event) {
            var el = event.target;
            var arr = ['span', 'h2', '.description', '.buttons'];
            $(arr).each(function (indx, elem) {
                $(elem, el).addClass(' animate__animated animate__fadeInUp')
                    .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                        $(elem, el).removeClass(' animate__animated animate__fadeInUp');
                    });
            })
        });
        //////////////////////////////// end of owl-1

        //////////////////////// owl2 start
        var owltestimonial = $('.testimonials');
        owltestimonial.owlCarousel({
            items: 2,
            loop: true,
            rewind: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                    loop: true,
                    autoplay: false,
                    autoplayTimeout: 1000,
                    autoplayHoverPause: false,
                },
                800: {
                    items: 1,
                    margin: 0,
                    autoplayTimeout: 5000,
                },
                1200: {
                    autoplay: false,
                    autoplayTimeout: 5000,
                }
            }
        });
        /*keyboard navigation*/
        $(document.documentElement).keyup(function (event) {
            if (event.keyCode == 37) { /*left key*/
                owl.trigger('prev.owl.carousel', [700]);
                owltestimonial.trigger('prev.owl.carousel', [700]);
            } else if (event.keyCode == 39) { /*right key*/
                owl.trigger('next.owl.carousel', [700]);
                owltestimonial.trigger('next.owl.carousel', [700]);

            }
        });
    }

});


//linking product.html
// document.querySelector('.product_link_parent').onclick = () => { location.href = 'products.html' }

//when user clicks on search icon
var searchIcon = document.querySelector('.search-icon i');
var searchWrapper = document.querySelector('.search-wrapper');
var searchInput = document.querySelector('.search-form input');
searchIcon.addEventListener("click", function () {
    searchWrapper.style.opacity = 1;
    searchWrapper.style.pointerEvents = "auto";
    searchInput.value = '';
});
//when user clicks on close icon in search wrapper
var searchCloseIcon = document.querySelector('.search-wrapper span i');
searchCloseIcon.addEventListener("click", function () {
    searchWrapper.style.opacity = 0;
    searchWrapper.style.pointerEvents = "none";
    searchInput.value = '';
});


///////////////////changin search icon location////////////////
var viewportWidth = window.innerWidth;
var searchIcon = document.querySelector('.search-icon');
var searchIn = document.querySelector('.search-inn');

if (viewportWidth <= 991) {
    searchIcon.parentElement.removeChild(searchIcon);
    searchIn.appendChild(searchIcon);
}
var b = document.body;
function checkpages(page) {
    ////////////////////////////// every product same height 
    if (page.classList.contains('blog')) {
        var products = document.querySelectorAll('.product_card');
        var heights = [];
        products.forEach(el => {
            heights.push(el.clientHeight);
        });
        var highestProd = Math.max(...heights);
        products.forEach(p => {
            if (p.clientHeight < highestProd) {
                p.style.height = highestProd + 'px';
            }
        })
    } else if (page.classList.contains('single-post')) {
        //////////////////////////////////////////////////////////////
        //                      Single Product
        //////////////////////////////////////////////////////////////
        var minImg = document.querySelectorAll('.protein-min-img');
        var bigImg = document.querySelectorAll('.protein-big-img')
        var imgSlider = document.querySelector('.img-slider-div');
        var proteinBigImgContainer = document.querySelector('.protein-big-img-container');
        console.log(minImg, bigImg, imgSlider, proteinBigImgContainer);
        for (let i = 0; i < minImg.length; i++) {
            bigImg[i].style.width = proteinBigImgContainer.clientWidth + 'px';
            minImg[i].onclick = () => {
                imgSlider.style.marginLeft = `-${proteinBigImgContainer.clientWidth * i}px`;
                bigImg.forEach((item) => {
                    item.classList.remove('active-product-img');
                    item.src = minImg[i].src;
                })
                bigImg[i].classList.add('active-product-img');
                minImg.forEach((item) => {
                    item.classList.remove('active');
                })
                minImg[i].classList.add('active');
            }
        }
    }
}
checkpages(b)


var header_menu_items = document.querySelectorAll("#menu-main-menu li");
header_menu_items.forEach(e => {
    e.className += " nav-item";
});
var header_menu_links = document.querySelectorAll("#menu-main-menu li a");
header_menu_links.forEach(e => {
    e.className += " nav-link";
});


// menu toggle 

var navBarToggler = document.querySelector('.navbar-toggler')
var navBar = document.querySelector('.navbar-collapse')
var expanded = false;
console.log(navBarToggler, navBar, expanded);
navBarToggler.onclick = () => {
    navBarToggler.classList.toggle('collapsed')
    expanded = !expanded
    navBarToggler.ariaExpanded = expanded
    navBar.classList.toggle('show')
}

