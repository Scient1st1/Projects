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

                <?php
                if ($this->countmodules('position3')) {
                    ?> 
                    <div class="free-content-top">
                        <div class="first">
                            <jdoc:include type="modules" name="position3" style=""/>     
                        </div>
                    </div>
                <?php }
                ?>
                <div class="container-fluid">
                    <?php
                    if ($this->countmodules('search')) {
                        ?>
                        <div class="search-and-lang ">
                            <div class="search_hold">
                                <div class="search_background"></div>
                                <div class="glyphicon glyphicon-search"></div>
                                <jdoc:include type="modules" name="search" style="" />

                            </div>


                            <div class="lang-cont">                      
                                <jdoc:include type="modules" name="lang" style="" />
                            </div>
                        </div>



                        <?php
                    }


                    if ($this->countmodules('logo')) {
                        ?>

                    <?php } ?>
                    <div class="logo-cont ">
                        <div id="logo" class="logo">
                            <?php echo ResponsiveHelper::getLogo(); ?>
                        </div>  
                    </div>

                    <?php
                    if ($this->countmodules('mod_login')) {
                        ?>
                        <div class="login-and-card">
                            <div class="mod_login">
                                <div class="user_icon"> </div>
                                <div class="logni_btns">
                                    <jdoc:include type="modules" name="mod_login"/> 
                                </div>
                            </div>
                        <?php }
                        ?>

                        <?php
                        if ($this->countmodules('card')) {
                            ?>
                            <div class="mod_card">
                                <jdoc:include type="modules" name="card" /> 
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    if ($this->countmodules('mod_simplemenu')) {
                        ?>
                        <div class="user-menu">
                            <jdoc:include type="modules" name="user_menu"/>                       
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="header_bot">
                <div class="container-fluid">

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
                </div>
            </div>

            <!-- SLIDER START  -->
            <?php
            if ($this->countmodules('slider')) {
                ?>
                <div class="slider">           
                    <jdoc:include type="modules" name="slider" />           
                </div>
            <?php }
            ?>
            <!-- SLIDER END -->
            <?php
            if ($this->countmodules('mod_filter')) {
                ?>
                <div class="filter-and-classifier">
                    <div class="container">
                        <div class="col-md-6">
                            <div class="filter-holder">
                                <jdoc:include type="modules" name="mod_filter" style="web"/>   
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    if ($this->countmodules('mod_shopclassifier')) {
                        ?>
                        <div class="col-md-6">
                            <div class="classifier-holder">
                                <jdoc:include type="modules" name="mod_shopclassifier" style="web"/>   
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <div class="container">
                <jdoc:include type="message" />
                <noscript>
                <div class="js_error">
                    To See This Web Page You  Need Java Script!!!
                </div>
                </noscript>
            </div>

            <!--component-->
            <?php
            if ($this->countmodules('left')) {
                ?>  
                <div class="two_rows">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="left_content">
                                    <jdoc:include type="modules" name="left" style="web"/> 
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
                <?php
            } else {
                ?>
                <div class="container">
                    <jdoc:include type="modules" name="center_top" style="web"/> 
                    <jdoc:include type="component" style="web"/>
                    <jdoc:include type="modules" name="center_bot" style="web"/> 
                </div>
                <?php
            }
            ?>

            <!--component end-->

            <div class="maincontent">


                <?php
                if ($this->countmodules('singlearticle')) {
                    ?>
                    <div class="single-article">
                        <div class="container">
                            <jdoc:include type="modules" name="singlearticle"/>    
                        </div>
                    </div>
                <?php } ?>
                <?php
                if ($this->countmodules('partners')) {
                    ?>
                    <div class="partners-holder">
                        <div class="container">
                            <div class="partners">
                                <jdoc:include type="modules" name="partners" style="web"/> 
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
                if ($this->countmodules('mod_popularproduct')) {
                    ?> 
                    <div class="popular-holder">
                        <div class="mod_popular">
                            <div class="container">
                                <div class="row">
                                    <jdoc:include type="modules" name="mod_popularproduct" style="web"/> 
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

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



                <div class="cls"></div>
            </div>

            <!--start footer-->

            <div id="footer">
                <div class="footer_top">  
                    <?php
                    if ($this->countmodules('simple_menu')) {
                        ?>  
                        <div class="container">
                            <div class="col-sm-12 col-md-4">
                                <div class="footer-left-menu">
                                    <jdoc:include type="modules" name="user_menu" style="web" />
                                </div>
                            </div>
                            <?php
                        }
                        ?>   
                        <div class="col-sm-12 col-md-4">
                            <?php
                            if ($this->countmodules('simple_menu')) {
                                ?>             
                                <div class="mod_simplemenu">
                                    <jdoc:include type="modules" name="simple_menu" style="web"/> 
                                    <div class="cls"></div>
                                </div>
                                <?php
                            }
                            ?>   
                        </div>

                        <div class="col-sm-12 col-md-4">
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

                <div class="footer_bot">
                    <div class="container">
                        <?php
                        if ($this->countmodules('socials')) {
                            ?>  
                            <div class="col-md-3 social-holder">
                                <div class="socials">
                                    <jdoc:include type="modules" name="socials" />
                                </div>
                            </div>
                        <?php } ?>
                        <div class="col-md-9 others-holder">
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