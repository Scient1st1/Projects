<?php get_header(); ?>
<!-- main -->

<main id="main-wrapper" class="position-relative products_wrapper pb-0">
    <!-- green banner -->

    <div class="container_fluid green_banner">
        <div class="container d-flex flex-wrap  justify-content-between align-items-center">
            <h4 class="product_title text-white mb-0">
                <?php
                $pProducts = get_post(9);
                echo $pProducts->post_title;
                ?>
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

    <!-- start products container -->
    <section class="products_container">
        <div class="container-fluid">
            <div class="container">
                <div class="row d-flex justify-content-center py-2">
                    <div class="col-12 d-flex justify-content-sm-between flex-sm-row flex-column align-items-center flex-wrap p-0 p-sm-3 ">

                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $productsArgs = array(
                            'cat' => 10,
                            'posts_per_page' => '8',
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'paged' => $paged
                        )
                        ?>
                        <?php
                        // the query
                        $the_query = new WP_Query($productsArgs); ?>

                        <?php if ($the_query->have_posts()) : ?>

                            <!-- pagination here -->

                            <!-- the loop -->
                            <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>

                                <div class="card product_card my-3">
                                    <div class="card_image p-0">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h5>
                                        <p class="card_categories">

                                            <?php
                                            $category_products = get_category(10);
                                            echo $category_products->name;
                                            ?>


                                        </p>
                                        <p class="card-text pb-3"><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
                                        </p>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <!-- end of the loop -->

                            <!-- pagination starts -->
                            <section class="pagination_section w-100">
                                <div class="container-fluid">
                                    <div class="row justify-content-center flex-column align-items-center">
                                        <!-- With Next Button -->
                                        <div class="paging_div">
                                            <div class="paging_wrapper">
                                                <ul class="page_numbers">
                                                    <?php
                                                    $paginateArgs = array(
                                                        'show_all' => true,
                                                        'total' => $the_query->max_num_pages,
                                                        'prev_text' => 'Previous',
                                                        'next_text' => false,
                                                        'current' => $paged
                                                    );
                                                    echo paginate_links($paginateArgs);
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- With Previous Button-->

                                    </div>
                                </div>
                            </section>
                            <!-- pagination ends -->

                            <?php wp_reset_postdata(); ?>

                        <?php else : ?>
                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end products container -->

</main>
<!-- end of main  -->
<?php get_footer(); ?>