<?php get_header() ?>

<main id="main-wrapper" class="position-relative">
    <!-- green banner -->
    <div class="container_fluid green_banner">
        <div class="container d-flex flex-wrap  justify-content-between align-items-center">
            <h4 class="product_title text-white mb-0">საძიებო სიტყვა:<span><?php echo get_search_query() ?></span></h4>
            <nav aria-label="breadcrumb" class="product_breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?php echo home_url() ?>" class="text-white text-decoration-none"><i class="fas fa-home"></i>მთავარი</a>
                    </li>
                    <li class="breadcrumb-item active" id="active-breadcrumb" aria-current="page">
                        საძიებო სიტყვა: <span><?php echo get_search_query() ?></span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- green banner -->
    <div class="container">
        <div class="row py-5 search_result">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <article class="col-12 search-result position-relative py-4">
                        <div class="search-post-title mb-3">
                            <a href="<?php the_permalink() ?>"><span class="right-hand-icon"><i class="far fa-hand-point-right"></i></span> <?php the_title() ?></a>
                        </div>
                        <div class="search-post-text">
                            <?php echo get_the_content() ?>
                        </div>
                    </article>
                <?php }; ?>
            <?php } else { ?>
                <!-- not found start  -->
                <div class="container py-5">
                    <div class="row py-5 search_results justify-content-center">
                        <div class="col-12 col-md-8 text-center">
                            <p class="search_error_message">მსგავსი რეზულტატი არ მოიძებნა, სცადეთ სხვა სიტყვა</p>
                            <?php
                            $form = '
                                <form role="search" method="get" id="searchform" class="mt-4 position-relative" action="' . home_url('/') . '" >
                                <input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="ძიება" class="form-control one_more_search_inp"/>
                                <label for="pageSearchsubmit" class="position-absolute search-ico"><i class="fas fa-search"></i></label>
                                <input hidden type="submit" id="pageSearchsubmit" value="' . esc_attr__('Search') . '" />
                                </form>';

                            ?>
                            <?php echo $form ?>

                        </div>
                    </div>
                </div>
                <!-- not found end  -->
            <?php }

            ?>


        </div>

    </div>

</main>



<?php get_footer() ?>