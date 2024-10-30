<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="...">
    <meta name="keywords" content="...">
    <meta name="author" content="...">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>სს "ივერია"</title>
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <!-- with-animated-slider    -->
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white py-3 px-2">
            <div class="container">
                <span class="navbar-brand logo ps-0 position-relative">
                    <?php the_custom_logo() ?>
                </span>
                <div class="search-inn">

                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="d-flex justify-content-between align-items-center w-100 navbar-inner">
                        <?php wp_nav_menu(array(
                            'menu' => 'main-menu',
                            'theme_location' => 'header-main',
                            'menu_class' => 'navbar-nav',
                            'container' => false,
                        )); ?>
                        <span class="search-icon">
                            <i class="fas fa-search"></i>
                            <div class="d-flex flex-column  justify-content-center align-items-center position-fixed search-wrapper">
                                <span><i class="fas fa-times position-absolute"></i></span>
                                <form action="#" method="get" class="search-form d-flex align-items-center position-relative">
                                    <?php get_search_form()  ?>
                                </form>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div id="loader">
        <img src="<?php echo get_template_directory_uri() . '/ASSETS/IMAGES/logo.png' ?>" alt="">
    </div>
    <!-- end of header -->