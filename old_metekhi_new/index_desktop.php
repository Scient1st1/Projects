<?php
defined('_JEXEC') or die('Restricted access');
$CurrentView = JRequest::getVar('view');
require_once(PATH_THEMES . DS . 'system' . DS . 'define.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
    <jdoc:include type="head" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#d8b471">
    <link rel="stylesheet" href="<?php echo ResponsiveHelper::getCssLink(); ?>" type="text/css" />
</head>
<?php
if ($this->countmodules('slider')) {
    ?>
    <body class="sliderbody">
        <?php
    } else {
        ?>
    <body class="nosliderbody">  
        <?php
    }
    ?>

    <!--start all-->
    <div id="all">
        <div class="all">

            <!--start center-->
            <!--start header-->

            <section id="header">
                <section class="header">

                    <div class="header_top">
                        <div class="container">
                            <?php
                            if ($this->countmodules('mod_contact')) {
                                ?>
                                <div class="mod_contact">
                                    <jdoc:include type="modules" name="mod_contact"/>
                                </div> 
                                <?php
                            }
                            ?>
                            <?php
                            if ($this->countmodules('socials')) {
                                ?>
                                <div class="socials">
                                    <jdoc:include type="modules" name="socials" />
                                </div>
                                <?php
                            }
                            ?>
                            <?php
                            if ($this->countmodules('lang')) {
                                ?>
                                <div class="lang-hold">
                                    <div id="lang">
                                        <jdoc:include type="modules" name="lang" />
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <?php
                            if ($this->countmodules('search')) {
                                ?>
                                <div class="search_hold">
                                    <div class="search_background">

                                    </div>
                                    <div class="glyphicon glyphicon-search"></div>

                                    <jdoc:include type="modules" name="search"/>

                                </div>
                                <?php
                            }
                            ?>
                        </div>


                    </div>
                    <div class="header_mid">
                        <div class="container logo-holder">
                            <div id="logo" class="logoidoidi">
                                <?php echo ResponsiveHelper::getLogo(); ?>
                            </div> 
                        </div>
                    </div>
                    <div class="header_bot">
                        <div class="container">

                            <div class=" menu_holder ">
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


                            <div class="cls"></div>
                        </div>
                    </div>
                    <div class="cls"></div>


                </section>
            </section>


            <!-- SLIDER START  -->
            <?php
            if ($this->countmodules('slider')) {
                ?>
                <div class="slider-but-cont">
                    <div class="slider">
                        <jdoc:include type="modules" name="slider" />
                        <div class="cls"></div>
                        <div class="free-content">
                            <jdoc:include type="modules" name="position1" />
                        </div>
                    </div>
                </div>
            <?php }
            ?>


            <!-- SLIDER END -->
            <!--block 2 start-->

            <?php
            if ($this->countmodules('position2')) {
                ?>  
                <div class="free-content-two">
                    <div class="container block-two-holder">
                        <jdoc:include type="modules" name="position2" />
                    </div>
                    <div class="near-border"></div>
                </div>
                <?php
            }
            ?> 
            <!--block 2 end-->
            <!--Block 3 start-->

            <?php
            if ($this->countmodules('image')) {
                ?>
                <div class="block-three">
                    <div class="container ">
                        <div class="block-three-inner">
                            <div class="image-carrier">
                                <jdoc:include type="modules" name="image"/> 
                            </div>
                            <div class="free-content-three">
                                <div class="block-three-line"></div>
                                <jdoc:include type="modules" name="position3"/>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?> 
            <!--block 3 end-->




            <div class="container">
                <jdoc:include type="message" />
                <noscript>
                <div class="js_error">
                    To See This Web Page You  Need Java Script!!!
                </div>
                </noscript>
            </div>

            <!--            <div class="maincontent">
            
            
            
                            <div class="cls"></div>
                        </div>-->
            <?php
            if ($this->countmodules('position5')) {
                ?>
                <div class="container">
                    <div class="free_content">
                        <jdoc:include type="modules" name="position5" style="web"/> 
                    </div>
                </div>
            <?php } ?>
            <?php
            if ($this->countmodules('simple_menu')) {
                ?>
                <div class="simple_menu">
                    <div class="container">
                        <jdoc:include type="modules" name="simple_menu" style="web"/> 
                    </div>
                </div>
            <?php } ?>

            <!--  COMPONENT  -->
            <!--block 4 start-->


            <jdoc:include type="component" style="web"/>
            <?php
            if ($this->countmodules('image1')) {
                ?>
            <div class="icon_mod">
                <div class="container">
                    <div class="row">
                        <jdoc:include type="modules" name="image1" style="web"/> 
                    </div>
                </div>
            </div>
            <?php } ?>

            <!--block 4 end-->
            <!--block 5 start singlearticle-->
            <?php
            if ($this->countmodules('singlearticle')) {
                ?>
                <div class="singlearticle-holder">
                    <div class="container">
                        <div class="singlearticles">
                            <jdoc:include type="modules" name="singlearticle"/> 
                        </div>
                    </div>
                </div>
                <?php
            }
            ?> 

            <!--block 5 end-->

            <!--block 6 start blog-module-->
            <?php
            if ($this->countmodules('mod_blog')) {
                ?>
                <div class="blog-holder">
                    <div class="container">
                        <div class="blog">
                            <jdoc:include type="modules" name="mod_blog" style="web"/> 
                        </div>

                    </div>
                </div>
                <?php
            }
            ?> 

            <!--block 6 start blog-module end-->


            <!--start footer-->
            <div class="footer">
                <div class="footer-top">
                    <?php
                    if ($this->countmodules('mod_map')) {
                        ?>  
                        <div class="map">
                            <jdoc:include type="modules" name="mod_map" style="web"/> 
                        </div>
                        <?php
                    }
                    ?> 
                </div>
                <div class="footer-mid">
                    <div class="container">
                        <div class="footer-logo">
                            <?php echo ResponsiveHelper::getLogo(); ?>
                            <?php
                            if ($this->countmodules('position4')) {
                                ?>  
                                <div class="footer-logo-description">
                                    <jdoc:include type="modules" name="position4" />
                                </div>
                                <?php
                            }
                            ?> 
                        </div>
                        <div class="footer-contact">
                            <?php
                            if ($this->countmodules('mod_contact_footer')) {
                                ?>
                                <div class="mod_contact">
                                    <jdoc:include type="modules"  name="mod_contact_footer"/>
                                </div> 
                                <?php
                            }
                            ?>
                        </div>
                        <div class="footer-form">
                            <?php
                            if ($this->countmodules('mod_forms')) {
                                ?>  
                                <div class="form-holder">
                                    <jdoc:include type="modules" name="mod_forms" style="web"/> 
                                </div>
                                <?php
                            }
                            ?> 
                        </div>
                    </div>
                </div>
                <div class="footer_bot">
                    <div class="container">
                        <div class="copyright">
                            <?php
                            require_once(PATH_THEMES . DS . 'system' . DS . 'copyright.php');
                            ?> 
                        </div>

                        <div class="developed">
                            <?php
                            require_once(PATH_THEMES . DS . 'system' . DS . 'developed.php');
                            ?> 
                        </div>


                        <!--require_once(PATH_THEMES . DS . 'system' . DS . 'topge.php');-->
                        <!--require_once(PATH_THEMES . DS . 'system' . DS . 'analitycs.php');-->
                        <div class="cls"></div>
                    </div>
                </div>

            </div>
            <div class="arrow_up">

            </div>

            <!--end footer-->
            <!--end center-->
        </div>
    </div>
    <!--end all-->

    <script src="<?php echo ResponsiveHelper::getJSLink(); ?>" type="text/javascript"></script>

<jdoc:include type="modules" name="debug" />
<jdoc:include type="modules" name="background" />
</body>
</html>
