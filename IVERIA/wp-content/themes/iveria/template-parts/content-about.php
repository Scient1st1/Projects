<?php get_header(); ?>

<main id="main-wrapper" class="position-relative bg-light">
    <!-- green banner -->
    <div class="container_fluid green_banner">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <h4 class="product_title text-white mb-0"><?php
             $pAbout = get_post(7);
            echo $pAbout->post_title; ?>
            </h4>
            <nav aria-label="breadcrumb" class="product_breadcrumb">
                <ol class="breadcrumb mb-0">
                <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<li  class="breadcrumb-item">', '</li>');
                    }
                    ?>
                </ol>
            </nav>
        </div>
    </div>
    <!-- green banner -->

    <div class="container_fluid bg-light pt-5 text_color">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-12 col-lg-7 ">
                    <div>

                        <div class="aboutustexts">
                            <?php 
                           
                            echo  $pAbout->post_content;
                             ?>
                           

                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-12 col-lg-4 myWidget">

                <?php dynamic_sidebar('mySidebar');
        
        ?>
                 

                </div>
            </div>
        </div>

    </div>



</main>


<?php get_footer(); ?>