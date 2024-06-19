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
        <div class="all">

            <!--start center-->
            <!--start header-->
            <div class="header_top">       
                <div class="container">

                    <div class="col-md-3 col-sm-3 col-xs-12 header-top-left">
                        <?php
                        if ($this->countmodules('lang')) {
                            ?>
                            <div class="lang-cont">                      
                                <jdoc:include type="modules" name="lang" style="" />
                            </div>
                        <?php }
                        ?>   
                    </div>

                    <div class="header-top-right col-md-6 col-sm-6 col-xs-12">

                        <div class="logo-hold ">
                            <div id="logo" class="logo">
                                <?php echo ResponsiveHelper::getLogo(); ?>
                            </div>  
                        </div>

                    </div> 
                    <div class="col-md-3 col-sm-12 col-xs-12 card-and-login">
                        <?php
                        if ($this->countmodules('card')) {
                            ?>
                            <div class="card-holder">
                                <jdoc:include type="modules" name="card"/>  
                            </div>
                        <?php }
                        ?> 
                        <?php
                        if ($this->countmodules('mod_login')) {
                            ?>
                            <div class="mod_login">
                                <div class="user_icon"> </div>
                                <div class="logni_btns">
                                    <jdoc:include type="modules" name="mod_login"/> 
                                </div>
                            </div>
                        <?php }
                        ?>     
                    </div>
                    <div class="cls"></div>


                </div>
            </div>

            <div class="header_bot">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 socials-area">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>     
                            <?php
                            if ($this->countmodules('socials')) {
                                ?>  
                                <div class="social-holder">
                                    <div class="socials">
                                        <jdoc:include type="modules" name="socials" />
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="menu-area col-md-8 col-sm-12 col-xs-12">
                            <div class=" menu_holder">
                                <div id="supermenu" role="navigation" class="navbar">
                                    <!--navbar-header-was-here-->                  
                                    <div class="mainmenu collapse navbar-collapse" id="bs-navbar-collapse-1">
                                        <jdoc:include type="modules" name="menu" />
                                    </div>
                                    <div class="cls"></div>      
                                    <div class="cls"></div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-2">
                            <?php
                            if ($this->countmodules('position3')) {
                                ?>
                                <div class="header-bot-free">
                                    <jdoc:include type="modules" name="position3" />
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--header-end-->

            <!--free-content-pos-6-->
            <?php
            if ($this->countmodules('position6', 'position7', 'position8')) {
                ?>
                <div class="container_fluid free-content-holder">

                    <div class="free-above-slider one">
                        <jdoc:include type="modules" name="position6" />
                    </div>


                    <div class="free-above-slider two">
                        <jdoc:include type="modules" name="position7" />
                    </div>


                    <div class="free-above-slider three">
                        <jdoc:include type="modules" name="position8" />
                    </div>

                </div>
            <?php } ?>

            <!--free-content-pos-6-end-->

            <!-- SLIDER START  -->
            <?php
            if ($this->countmodules('slider')) {
                ?>
                <div class="slider">           
                    <jdoc:include type="modules" name="slider" style="web" />           
                </div>
            <?php }
            ?>
            <div class="cls"></div>

            <!-- SLIDER END -->

            <!--message-->
            <div class="container">
                <jdoc:include type="message" />
                <noscript>
                <div class="js_error">
                    To See This Web Page You  Need Java Script!!!
                </div>
                </noscript>
            </div>
            <!--message-end-->
            <div class="maincontent">
                <!--filter & classifier-->



                <!--filter & classifier-end-->

                <!--icons-->
                <div class="container_fluid">
                    <?php
                    if ($this->countmodules('image')) {
                        ?>
                        <div class="image-holder">
                            <jdoc:include type="modules" name="image" style="web"/>
                        </div>
                    <?php } ?>
                </div>
                <!--icons-end-->

                <!--multi-category-start-->

                <?php
                if ($this->countmodules('mod_shopmulticategory')) {
                    ?>
                    <div class="container">
                        <div class="multi-category-holder">
                            <jdoc:include type="modules" name="mod_shopmulticategory" style="web"/>
                        </div>
                    </div>
                <?php } ?>
                <!--multi-category-end-->

                <!--page-bg-start--> 
                <div class="container_fluid rel-fluid">

                    <?php
                    if ($this->countmodules('position4')) {
                        ?>
                        <div class="bg">
                            <div class="free-content-bg">
                                <jdoc:include type="modules" name="position4" style=""/>
                            </div>
                        </div>
                    <?php }
                    ?>

                    <?php
                    if ($this->countmodules('mod_bgvideo')) {
                        ?>
                        <div class="bg-video">
                            <div class="bg-video-cont">
                                <jdoc:include type="modules" name="mod_bgvideo" style=""/>
                            </div>
                        </div>
                    <?php }
                    ?>

                </div>
                <!--page-bg-end-->

                <!--component-->
                <?php
                if ($this->countmodules('left') || $this->countmodules('mod_filter') || $this->countmodules('mod_shopclassifier')) {
                    ?>
                    <div class="two_rows">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="left_content">
                                        <jdoc:include type="modules" name="left" style="web"/> 
                                        <div class="filter-holder">
                                            <jdoc:include type="modules" name="mod_filter" style="web"/>   
                                        </div> 
                                        <div class="classifier-holder">
                                            <jdoc:include type="modules" name="mod_shopclassifier" style="web"/>  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="right_component">
                                        <jdoc:include type="modules" name="center_top" style="web"/> 
                                        <jdoc:include type="component" style="web"/>
                                        <jdoc:include type="modules" name="center_bot" style="web"/> 
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php } else {
                    ?>
                    <div class="container">
                        <jdoc:include type="modules" name="center_top" style="web"/> 
                        <jdoc:include type="component" style="web"/>
                        <jdoc:include type="modules" name="simple_menu" style="web"/> 
                        <jdoc:include type="modules" name="center_bot" style="web"/> 
                    </div>
                    <?php
                }
                ?>



                <!--component end-->

                <?php
                if ($this->countmodules('mod_popularproduct')) {
                    ?> 
                    <div class="popular-holder">
                        <div class="mod_popular">
                            <div class="container">

                                <jdoc:include type="modules" name="mod_popularproduct" style="web"/>
                                <div class="free-content-5">
                                    <jdoc:include type="modules" name="position5" style="web"/>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php
                if ($this->countmodules('mod_lastproducts')) {
                    ?>  
                    <div class="container">  
                        <div class="shop-last-products">
                            <jdoc:include type="modules" name="mod_lastproducts" style="web"/> 
                        </div>
                        <div class="free-content-one">
                            <jdoc:include type="modules" name="position1" style=""/> 
                        </div>
                    </div>    
                    <?php
                }
                ?>

                <?php
                if ($this->countmodules('mod_categoryproduct')) {
                    ?> 
                    <div class="category-holder">
                        <div class="mod_category">
                            <div class="container">
                                <jdoc:include type="modules" name="mod_categoryproduct" style="web" /> 
                            </div>
                        </div>
                    </div>
                <?php }
                ?>

                <?php
                if ($this->countmodules('specificproducts')) {
                    ?> 
                    <div class="specific-holder">
                        <div class="container">
                            <div class="mod_specific">
                                <jdoc:include type="modules" name="specificproducts" style="web"/> 
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php
                if ($this->countmodules('position2')) {
                    ?> 
                    <div class="free_content2">
                        <div class="container-fluid">
                            <jdoc:include type="modules" name="position2" style="web"/> 
                        </div>
                    </div>
                <?php } ?>
            </div>




            <!--mod-blog-start-->
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
            <!--mod-blog-end-->
            <!--start footer-->

            <div id="footer">
                <div class="footer_top"> 
                    <div class="container">

                        <div class="logo-and-copyright col-xs-12 col-sm-4 col-md-6 col-lg-3">
                            <div id="logo" class="logo">
                                <?php echo ResponsiveHelper::getLogo(); ?>
                            </div>
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

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <?php
                            if ($this->countmodules('simple_menu')) {
                                ?>             
                                <div class="mod_simplemenu first">
                                    <jdoc:include type="modules" name="simple_menu" style="web"/> 
                                    <div class="cls"></div>
                                </div>
                                <?php
                            }
                            ?> 
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                            <?php
                            if ($this->countmodules('user_menu')) {
                                ?>             
                                <div class="mod_simplemenu second">
                                    <jdoc:include type="modules" name="user_menu" style="web"/> 
                                    <div class="cls"></div>
                                </div>
                                <?php
                            }
                            ?> 
                        </div>
                        <div class="col-xs-12 col-lg-5">
                            <?php
                            if ($this->countmodules('mod_forms')) {
                                ?>    
                                <div class="mod_forms_footer">
                                    <jdoc:include type="modules" name="mod_forms" style="web"/> 
                                </div>
                            <?php } ?>
                        </div>
                        <div class="cls"></div>
                    </div>
                </div>
            </div>

            <div class="footer_bot"> 
                <div class="container footer-bot-cont">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            if ($this->countmodules('socials')) {
                                ?>  
                                <div class=" social-holder">
                                    <div class="socials">
                                        <jdoc:include type="modules" name="socials" />
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="arrow_up">

        </div>


    </div>
    <!--</div>-->
    <!--end all-->

    <script src="<?php echo ResponsiveHelper::getJSLink(); ?>" type="text/javascript"></script>

<jdoc:include type="modules" name="debug" />
<jdoc:include type="modules" name="background" />
</body>
</html>