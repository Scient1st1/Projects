 <?php get_header(); ?>
 <!-- main -->

 <main id="main-wrapper" class="position-relative">
     <!-- main slider -->
     <section id="slider" class="container-fluid px-0">
         <div class="owl-carousel main-products">
             <?php
                $sliderArgs = array(
                    'cat' => '5',
                    'posts_per_page' => '6',
                    'post_type' => 'post',
                    'post_status' => 'published',
                    'order' => 'ASC'
                )
                ?>
             <?php
                // the query
                $the_query = new WP_Query($sliderArgs); ?>

             <?php if ($the_query->have_posts()) : ?>

                 <!-- pagination here -->

                 <!-- the loop -->
                 <?php while ($the_query->have_posts()) : $the_query->the_post();

                    ?>

                     <div class="slider-item container" style="background: url('<?php the_post_thumbnail_url(); ?> ') no-repeat;">
                         <div class="item-content d-flex justify-content-center align-items-center">
                             <div class="item-text text-center">
                                 <span class="sub-heading">
                                     <?php $category_offers = get_category(5);
                                        echo $category_offers->name; ?>
                                 </span>
                                 <h2 class="text-uppercase heading text-uppercase"><?php the_title(); ?></h2>
                                 <div class="description"><?php the_content(); ?>
                                 </div>
                                 <div class="buttons">
                                     <a href="<?php echo home_url() . '/პროდუქტები' ?>" class="text-uppercase show_more text-decoration-none">იხილეთ სხვა პროდუქტები</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php endwhile; ?>
                 <!-- end of the loop -->

                 <!-- pagination here -->

                 <?php wp_reset_postdata(); ?>

             <?php else : ?>
                 <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
             <?php endif; ?>



         </div>
     </section>
     <!-- end of main slider -->
     <!-- product_benefits -->

     <section id="product_benefits" class="py-5">
         <div class="container py-5">
             <div class="row justify-content-between flex-wrap">
                 <?php
                    $benefitsArgs = array(
                        'cat' => '6',
                        'posts_per_page' => '3',
                        'post_type' => 'post',
                        'post_status' => 'published',
                        'order' => 'ASC'
                    )
                    ?>
                 <?php
                    // the query
                    $the_query = new WP_Query($benefitsArgs); ?>

                 <?php if ($the_query->have_posts()) : ?>

                     <!-- pagination here -->

                     <!-- the loop -->
                     <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>

                         <div class="col-12 col-lg-3 border-0 card align-items-center text-center product_benefit p-4">
                             <?php $icon_benefit = get_post_meta($post->ID, 'benefit_icon', true);
                                if (!empty($icon_benefit)) { ?>
                                 <div class="card-img-top benefit_icon position-relative d-flex justify-content-center align-items-center">
                                     <?php echo  $icon_benefit ?>
                                 </div><?php } ?>
                             <div class="card-body">
                                 <h5 class="card-title benefit_title py-2 fw-bold text-capitalize"><?php the_title(); ?></h5>
                                 <?php the_content(); ?>
                             </div>
                         </div>
                     <?php endwhile; ?>
                     <!-- end of the loop -->

                     <!-- pagination here -->

                     <?php wp_reset_postdata(); ?>

                 <?php else : ?>
                     <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                 <?php endif; ?>
             </div>
         </div>
     </section>
     <!-- end of product_benefits -->
     <!-- start new products -->
     <section id="new_products">

         <div class="container">
             <div class="row justify-content-between flex-wrap">
                 <div class="category_title text-uppercase">
                     <?php $category_popular_products = get_category(7);
                        echo $category_popular_products->name; ?>
                 </div>
                 <div class="col-12 col-lg-6 cream_nunisi">
                     
                     <h4 class="product_title mb-4 d-flex align-items-center">
                         <?php
                            $post_cream_Nunisi = get_post(93);
                            echo $post_cream_Nunisi->post_title; ?>
                         <svg class="ms-3" width="95" height="10" viewBox="0 0 95 10" xmlns="http://www.w3.org/2000/svg">
                             <path d="M1 8l11.54-6 11.538 6 11.54-6 11.538 6 11.538-6 11.54 6L81.77 2 94 8" stroke-width="3" stroke="#6CC139" fill="none" fill-rule="evenodd"></path>
                         </svg>
                     </h4>
                     <?php echo $post_cream_Nunisi->post_content; ?>
                     <a href="<?php echo home_url() . '/პროდუქტები' ?>" class="read"><span>იხილეთ მეტი</span></a>
                 </div>
                 <div class="col-12 col-lg-5 img_content">
                     <?php echo get_the_post_thumbnail($post_cream_Nunisi->ID, array(600, 530), array('class' => 'img-responsive mw-100')); ?>
                 </div>
             </div>
         </div>
     </section>
     <!-- end new products -->
     <!-- testimonials start -->
     <section id="testimonials" class="container-fluid p-3 p-sm-5">
         <div class="container">
             <div class="row justify-content-between flex-wrap">
                 <div class="category_title text-uppercase text-center">
                     <?php $category_testemonials = get_category(8);
                        echo $category_testemonials->name; ?>
                 </div>

                 <div class="owl-carousel testimonials">
                     <?php
                        $testemonialsArgs = array(
                            'cat' => '8',
                            'posts_per_page' => '3',
                            'post_type' => 'post',
                            'post_status' => 'published',
                            'order' => 'ASC'
                        )
                        ?>
                     <?php
                        // the query
                        $the_query = new WP_Query($testemonialsArgs); ?>

                     <?php if ($the_query->have_posts()) : ?>

                         <!-- pagination here -->

                         <!-- the loop -->
                         <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
                             <div class="item-testimonials container justify-content-center align-items-center">
                                 <div class="testimonials-heading d-flex flex-column">
                                     <span class="quotes"></span>
                                     <span class="sub-heading"><?php the_title(); ?></span>
                                 </div>
                                 <?php the_content(); ?>

                             </div>
                         <?php endwhile; ?>
                         <!-- end of the loop -->

                         <!-- pagination here -->

                         <?php wp_reset_postdata(); ?>

                     <?php else : ?>
                         <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                     <?php endif; ?>


                 </div>

             </div>
         </div>
     </section>
     <!-- testimonials end -->
     <!-- our business partners -->
     <section id="our_partner" class="py-5">
         <div class="container">
             <div class="row justify-content-between flex-wrap">
                 <div class="category_title text-uppercase">
                     <?php $category_partners = get_category(9);
                        echo $category_partners->name; ?>
                 </div>
                 <div class="col-12 col-lg-6 partners_desc">
                     <h4 class="product_title mb-4 d-flex">
                         <?php
                            $post_partner_companies = get_post(102);
                            echo $post_partner_companies->post_title; ?>
                     </h4>
                     <svg width="95" height="10" viewBox="0 0 95 10" xmlns="http://www.w3.org/2000/svg">
                         <path d="M1 8l11.54-6 11.538 6 11.54-6 11.538 6 11.538-6 11.54 6L81.77 2 94 8" stroke-width="3" stroke="#6CC139" fill="none" fill-rule="evenodd"></path>
                     </svg>
                     <?php echo $post_partner_companies->post_content; ?>
                     <a href="<?php echo home_url() . '/ჩვენ-შესახებ' ?>" class="read"><span>იხილეთ მეტი</span></a>
                 </div>
                 <?php $partner_logo_urls = get_post_meta($post_partner_companies->ID, 'parnter_company_logo_urls', true);
                    if (!empty($partner_logo_urls)) { ?>
                     <div class="col-12 col-lg-5  d-flex flex-wrap justify-content-between img_content">
                         <?php $partner_logos_array = explode("+", $partner_logo_urls);
                            foreach ($partner_logos_array as $partner_logo_url) { ?>
                             <div class="partner_logo d-flex align-items-center justify-content-center my-2 "><img src="<?php echo $partner_logo_url; ?>" class="img-fluid" alt="..."></div>
                     <?php }
                        }
                        ?>

                     </div>
             </div>
         </div>
     </section>
     <!--end of our business partners -->
 </main>
 <!-- end of main  -->

 <?php get_footer(); ?>