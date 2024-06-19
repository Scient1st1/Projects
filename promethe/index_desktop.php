<?php
defined('_JEXEC') or die('Restricted access');

// Check View
$CurrentView = JRequest::getVar('view');

// Check Language
$sitelang = JFactory::getSiteLanguage();
$sitelang = $sitelang->getCurrentTag();

require_once(PATH_THEMES . DS . 'system' . DS . 'define.php');
?>
<!DOCTYPE HTML>
<html> 
    <head>
    <jdoc:include type="head" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fff">
    <link rel="stylesheet" href="<?php echo ResponsiveHelper::getCssLink(); ?>" type="text/css" />
</head>
<?php
if ($this->countmodules('slider')) {
    ?>
    <body class="sliderbody <?= $CurrentView ?>_View">
        <?php
    } else {
        ?>  
    <body class="nosliderbody <?= $CurrentView ?>_View">  
        <?php
    }
    ?>


    <!--start all-->
    <div id="all">


        <!--start center-->
        <!--start header-->
        <div class="header">  

            <div class="topline">
                <?php if ($this->countmodules('mod_contact')) {
                    ?>
                    <div class="header_contact col-md-8 col-sm-12 col-xs-12">
                        <jdoc:include type="modules" name="mod_contact" style="web"/>
                    </div>
                <?php }
                ?>  


                <?php
                if ($this->countmodules('socials')) {
                    ?>  
                    <div class="header-social-holder col-md-4 col-sm-12 col-xs-12">
                        <div class="header-socials">
                            <jdoc:include type="modules" name="socials" style="web"/>
                        </div>
                    </div>
                <?php } ?>
                <div class="cls"></div>
            </div>




            <div class="bottomline">
                <div class="logo_cont col-md-3 col-sm-6 col-xs-4">
                    <div id="logo" class="logo">
                        <?php echo ResponsiveHelper::getLogo(); ?>

                    </div> 
                    <div class="cls"></div>
                </div> 

                <div class="col-md-9 col-sm-12 col-xs-8 menu-lang">  
                    <div class=" menu_holder">
                        <div id="supermenu" role="navigation" class="navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="mainmenu collapse navbar-collapse" id="bs-navbar-collapse-1">
                                <jdoc:include type="modules" name="menu" />
                            </div>
                            <div class="cls"></div>
                        </div>
                        <div class="cls"></div>
                    </div>
                    <?php
                    if ($this->countmodules('lang')) {
                        ?>

                        <jdoc:include type="modules" name="lang" style="" />
                        <div class="cls"></div>


                    <?php }
                    ?>   

                    <div class="cls"></div>
                </div>
                <div class="cls"></div>
            </div>

            <div class="cls"></div>
        </div>

        <?php
        if (!$this->countmodules('slider') && !$this->countmodules('position4')) {
            ?>
            <div class="little_cover">

            </div>
            <?php
        }
        ?>
        <!--header-end-->
        <!-- SLIDER START  -->
        <?php
        if ($this->countmodules('slider')) {
            ?>
            <div class="slider">           
                <jdoc:include type="modules" name="slider" style="" /> 
                <?php
                if ($this->countmodules('position1')) {
                    ?>
                    <div class="slider_button">
                        <jdoc:include type="modules" name="position1" style="web" />   
                    </div>
                <?php }
                ?>
            </div>
            <?php
        } else {
            if ($this->countmodules('position4')) {
                ?>
                <video autoplay muted loop width="100%" id="myVideo">
                    <source src="<?= JURI::base() . '/templates/promethe/images/videobg.mp4' ?>" type="video/mp4">
                </video>
                <?php
            }
        }
        ?>
        <div class="cls"></div>

        <!-- SLIDER END -->

        <!--message-->
        <div class="container-fluid">
            <jdoc:include type="message" />
            <noscript>
            <div class="js_error">
                To See This Web Page You  Need Java Script!!!
            </div>
            </noscript>
        </div>
        <!--message-end-->


        <div class="maincontent">
            <?php
            if ($this->countmodules('simple_menu')) {
                ?>
                <div class="simple_holder">
                    <div class="simple_holder_in">
                        <jdoc:include type="modules" name="simple_menu" style="web" />
                    </div>

                </div>

            <?php }
            ?>   
            <?php
            if ($this->countmodules('mod_blog')) {
                ?>

                <div class="blog_holder">
                    <?php
                    if ($this->countmodules('position2')) {
                        ?>
                        <div class="blog_title_hold">
                            <jdoc:include type="modules" name="position2" style="web" />
                        </div>
                    <?php }
                    ?>
                    <div class="mod_blog_cont">
                        <jdoc:include type="modules" name="mod_blog" style="web" />
                    </div>

                </div>

            <?php }
            ?>   

            <?php
            if ($this->countmodules('position4')) {
                ?>
                <div class="page_body_products_title_free">
                    <jdoc:include type="modules" name="position4" style="web" />
                </div>
            <?php }
            ?>   

            <?php
            if ($this->countmodules('specificproducts')) {
                ?>
                <div class="page_body_products">
                    <jdoc:include type="modules" name="specificproducts" style="web" />
                </div>
            <?php } 
            ?>   
 

            <!--component-->

            <jdoc:include type="modules" name="center_top" style="web"/> 
            <jdoc:include type="component" style="web"/>     
            <jdoc:include type="modules" name="center_bot" style="web"/> 
            <div class="cls"></div>

            <!--component end-->

            <?php
            if ($this->countmodules('position3')) {
                ?>
                <div class="page_bg_holder">

                    <div class="bg_free_holder">
                        <div class="container">
                            <jdoc:include type="modules" name="position3" style="web" />
                        </div>
                    </div>
                </div>

            <?php }
            ?>   




            <!--singlearticle-->
            <?php
            if ($this->countmodules('singlearticle1')) {
                ?>
                <div class="container">

                    <div class="single_holder">
                        <jdoc:include type="modules" name="singlearticle1" style="web"/>
                    </div>

                </div>

            <?php } ?>

            <!--singlearticle-end-->







        </div>


        <div id="footer">
            <div class="footer_top"> 
                <div class="container">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <?php
                        if ($this->countmodules('position10')) {
                            ?>    
                            <div class="footer_free_holder">
                                <jdoc:include type="modules" name="position10" style="web"/> 
                            </div>
                        <?php } ?>

                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <?php
                        if ($this->countmodules('mod_contact_footer')) {
                            ?>    
                            <div class="mod_contact_footer">
                                <jdoc:include type="modules" name="mod_contact_footer" style="web"/> 
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer_socs">
                            <?php
                            if ($this->countmodules('socials')) {
                                ?>  
                                <div class="social-holder">
                                    <div class="socials">
                                        <jdoc:include type="modules" name="socials" style="web"/>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>


                    </div>

                </div>
            </div> 
            <div class="cls"></div>
            <div class="footer_bot">
                <div class="copyright">
                    <?php
                    require_once(PATH_THEMES . DS . 'system' . DS . 'copyright.php');
                    ?> 
                </div>

                <!--                        <div class="rates">
                <?php
                require_once(PATH_THEMES . DS . 'system' . DS . 'topge.php');
                require_once(PATH_THEMES . DS . 'system' . DS . 'analitycs.php');
                ?>
                                        </div>-->

                <div class="developed">
                    <?php
                    require_once(PATH_THEMES . DS . 'system' . DS . 'developed.php');
                    ?> 
                </div>

            </div>
        </div>  
        <!--</div>-->
        <!--end all-->

        <script src="<?php echo ResponsiveHelper::getJSLink(); ?>" type="text/javascript"></script>

        <jdoc:include type="modules" name="debug" />
        <jdoc:include type="modules" name="background" />
</body>
</html>