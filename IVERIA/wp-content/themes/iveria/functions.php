<?php


function add_wp_styles()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', null, false, 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/ASSETS/CSS/style.css', array(), filemtime(get_template_directory() .  '/ASSETS/CSS/style.css'), false, 'all');
    wp_enqueue_style('owl', get_template_directory_uri() . '/ASSETS/CSS/owl.carousel.min.css', array(), filemtime(get_template_directory() .  '/ASSETS/CSS/owl.carousel.min.css'), false, 'all');
    wp_enqueue_style('owl-default', get_template_directory_uri() . '/ASSETS/CSS/owl.theme.default.min.css', array(), filemtime(get_template_directory() .  '/ASSETS/CSS/owl.theme.default.min.css'), false, 'all');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), false, 'all');
    wp_enqueue_style('all-min', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'add_wp_styles');

function add_wp_scripts()
{
    wp_enqueue_script('jquery-main', get_template_directory_uri() . '/ASSETS/JS/jquery-3.6.0.min.js', array(), '3.6.0', true, 'all');
    wp_enqueue_script('owl-min', get_template_directory_uri() . '/ASSETS/JS/owl.carousel.min.js', array(), '1.0', true, 'all');
    wp_enqueue_script('bootstrap-cdn', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), '5.1.3', true, 'all');
    wp_enqueue_script('mainmainjs', get_template_directory_uri() . '/ASSETS/js/script.js', array(), '1.0', true, 'all');
}

add_action('wp_enqueue_scripts', 'add_wp_scripts');

function all_menus()
{
    $menus = array(
        'main-menu' => 'header-main',
        'footer-social' => 'footer-social',
        'footer-contact' => 'footer-contact',
    );
    register_nav_menus($menus);
};
add_action('init', 'all_menus');

add_theme_support('custom-logo');


add_theme_support('post-thumbnails');
add_theme_support('screenshot');

/*************************sidebar************************/
function add_sidebar()
{
    $args = array(
        'name' => 'mySidebar',
        'id' => 'side1',
        'description' => 'sidebar_desc',
        'before_widget' => '<div class="card shadow p-5  bg-white">',
        'after_widget' => '</div>',
        'befre_title' => '<h4>',
        'after_title' => '</h4>'
    );
    register_sidebar($args);
}

add_action('widgets_init', 'add_sidebar');



// add page title as body class

function my_body_class($classes) {

    if(is_page()){
      global $page;
      $title = get_the_title(  $page );
      $classes[] = $title;
    }
    return $classes;
}

add_filter('body_class', 'my_body_class');


// custom nav walker for dropdown 


//////////////////////////// custom search form 

// for front page 
function wpdocs_my_search_form( $form ) {
    $form = '
    <form role="search" method="get" id="searchform" class="search-form d-flex align-items-center position-relative" action="#' . home_url( '/' ) . '" >
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="საძიებო სიტყვა" class="text-uppercase search-inp w-100 bg-transparent"/>
    <label for="searchsubmit"><i class="fas fa-search"></i></label>
    <input hidden type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );


// active class 

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}












