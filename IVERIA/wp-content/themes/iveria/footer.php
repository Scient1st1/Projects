 <!-- footer -->
 <footer>
        <div class="container-fluid" id="footer-main">
            <div class="container footer-top py-5">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-5 col-sm-12  top-column position-relative">
                        <div id="logo-img">
                           <?php the_custom_logo(); ?>
                        </div>
                        <div class="company-description py-3">
                            <p>სს “ივერია” არის პარფიუმერული და კოსმეტიკური წარმოება.  </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 contact-info top-column">
                            <?php $footer_contact_menu = wp_get_nav_menu_object("კონტაქტი");?>
                            <h5 class="footer-title text-uppercase"><?php echo $footer_contact_menu->name; ?></h5>
                            <?php wp_nav_menu(array(
                                    'menu' => 'კონტაქტი',
                                    'theme_location' => 'footer-contact',
                                    'menu_class' => 'navbar nav flex-column align-items-start',
                                    'container' => 'false'
                            )); ?>
                    </div>
                    <div class="col-12 col-lg-3 col-sm-6 social-info">
                      
                            <?php $footer_socials_menu = wp_get_nav_menu_object("სოციალური ქსელები");?>
                            <h5 class="footer-title text-uppercase"><?php echo $footer_socials_menu->name; ?></h5>
                            <?php wp_nav_menu(array(
                                    'menu' => 'სოციალური ქსელები',
                                    'theme_location' => 'footer-social',
                                    'menu_class' => 'navbar nav flex-column align-items-start',
                                    'container' => 'false'
                            )); ?>
                    </div>
                </div>
            </div>
            <div class="container text-center footer-bottom position-relative">
                <div class="row py-4">
                    <span>© 2021  <a href="http://itvet.ge" target="_blank">ITVET</a> ყველა უფლება დაცულია.</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->
<?php wp_footer();?>

</body>


</html>
