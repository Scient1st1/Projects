<?php get_header(); ?>

<!-- end of header -->
<!-- main -->
<main id="main-wrapper" class="position-relative">
    <!-- map -->
    <section class="container-fluid map-area px-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2810.1371061535087!2d44.77247651219972!3d41.73699115799877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472ebf36640d1%3A0x147cb746bce27f60!2zNyDhg5Lhg6Phg5Phg5Dhg6Phg5fhg5Dhg6Eg4YOl4YOj4YOp4YOQLCDhg5fhg5Hhg5jhg5rhg5jhg6Hhg5g!5e0!3m2!1ska!2sge!4v1639851969357!5m2!1ska!2sge" width="100%" height="500" style="border:0" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!-- end of map -->
    <!-- contact info cards -->

    <section id="product_benefits" class="contact-info-cards">
        <div class="container">
            <div class="row justify-content-between flex-wrap contact-row">
                <?php
                $contactInfoArgs = array(
                    'cat' => '11',
                    'posts_per_page' => '3',
                    'post_type' => 'post',
                    'post_status' => 'published',
                    'order' => 'ASC'
                )
                ?>
                <?php
                // the query
                $the_query = new WP_Query($contactInfoArgs); ?>

                <?php if ($the_query->have_posts()) : ?>

                    <!-- pagination here -->

                    <!-- the loop -->
                    <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
                        <div class="col-12 col-lg-3 border-0 card align-items-center text-center product_benefit p-4 contact_detail">

                            <?php $contact_icon = get_post_meta($post->ID, 'contact_icon', true);
                            if (!empty($contact_icon)) { ?>
                                <div class="card-img-top benefit_icon position-relative d-flex justify-content-center align-items-center">
                                    <?php echo  $contact_icon; ?>
                                </div><?php } ?>
                            <div class="card-body">
                                <h5 class="card-title benefit_title py-2 fw-bold text-capitalize"><?php the_title(); ?></h5>

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
    <!-- end of contact info cards -->

    <div class="seperator position-relative w-100 py-5"></div>
    <!-- main contact form -->
    <section id="contact--form">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="contact-text text-center">
                        <?php
                        $contact_form_post = get_post(153);
       
                        ?>
                        <h3 class="contact-heading text-capitalize fw-bold mb-3"><?php echo $contact_form_post->post_title; ?></h3>

                    </div>
                    <div class="contact-form mt-5">
                        <?php $contact_form = '[contact-form-7 id="153" title="დაგვიკავშირდით"]';

                        echo do_shortcode($contact_form); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of main contact form -->
</main>
<!-- end of main  -->
<!-- footer -->
<?php get_footer(); ?>