<?php get_header(); ?>
<main id="main-wrapper" class="position-relative">
    <!-- green banner -->
    <div class="container_fluid green_banner">
        <div class="container d-flex flex-wrap  justify-content-between align-items-center">
            <h4 class="product_title text-white mb-0"><?php the_title(); ?></h4>
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



    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-lg-6 py-5">
                <div class="d-flex protein-big-img-container">
                    <div class="col-12 d-flex flex-row img-slider-div">
                        <div class="col-12">
                            <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="protein-big-img img-fluid active-product-img">
                        </div>
                        <div class="col-12">
                            <img src="" alt="" class="protein-big-img img-fluid">
                        </div>
                        <div class="col-12">
                            <img src="" alt="" class="protein-big-img img-fluid">
                        </div>
                        <div class="col-12">
                            <img src="" alt="" class="protein-big-img img-fluid">
                        </div>

                    </div>
                </div>
                <ol class="flex-control-nav flex-control-thumbs d-flex list-unstyled">
                    <li class="py-2"><img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid active protein-min-img" alt=""></li>

                    <?php
                    $minImg =  get_post_custom();
            
                    if(isset($minImg['min-image']) && !empty($minImg['min-image'])){
                        $minImgsArray = $minImg['min-image'];
                    }
                    // var_dump($minImgsArray);
                    if (isset($minImgsArray)) : ?>
                        <?php foreach ($minImgsArray as $min) : ?>
                            <?php if (strlen($min) !== 0) : ?>
                                <li class="py-2">
                                    <img src="<?php echo $min ?>" class="img-fluid protein-min-img" alt="">
                                </li>
                            <?php endif ?>
                        <?php endforeach ?>
                    <?php endif ?>

                </ol>
            </div>
            <div class="col-12 col-lg-6 py-5  ps-5">
                <h2 class="product_title"><?php the_title(); ?> </h2>
                <hr>
                <?php

                $box = get_post_meta($post->ID, 'box', true);
                if (!empty($box)) { ?>
                    <p class="box">
                        <span>შეფუთვა:</span><?php echo $box; ?>
                    </p> <?php } ?>
                <?php
                $tube = get_post_meta($post->ID, 'tube', true);
                if (!empty($tube)) { ?>
                    <p class="tube">
                        <span>ტუბი:</span><?php echo $tube; ?>
                    </p> <?php } ?>
                <?php
                $volume = get_post_meta($post->ID, 'volume', true);
                if (!empty($volume)) { ?>
                    <p class="volume">
                        <span>მოცულობა, მლ/ექვ.:</span><?php echo $volume; ?>
                    </p><?php } ?>
                <?php
                $price = get_post_meta($post->ID, 'price', true);
                if (!empty($price)) { ?>
                    <p class="price">
                        <span>პროდუქტის გასაყიდი ფასი:</span><?php echo $price . " " . "$"; ?>
                    </p><?php } ?>
                <p class="single_product_info">
                    <?php the_content(); ?>
                </p>


            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>