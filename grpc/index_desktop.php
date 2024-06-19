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
            <div class="container">
                <div class="topline">
                    <?php if ($this->countmodules('search')) {
                        ?>
                        <div class="search_cont">                      
                            <jdoc:include type="modules" name="search" style="web"/>


                        </div>
                    <?php }
                    ?>  
                    <div class="cls"></div>
                </div>

            </div>
            <div class="container">
                <div class="container_in">
                    <div class="logo_cont col-md-3 col-sm-12">
                        <div id="logo" class="logo">
                            <?php echo ResponsiveHelper::getLogo(); ?>

                        </div> 
                    </div> 

                    <div class="col-md-9 col-sm-12 col-xs-12 menu-lang">  
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

                    </div>
                    <div class="cls"></div>
                </div>

            </div>
        </div>

        <!--header-end-->
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
            <?php
            if ($this->countmodules('image')) {
                ?>
                <div class="image_holder">
                    <div class="container">
                        <jdoc:include type="modules" name="image" style="web" />
                        <div class="cls"></div>
                    </div>
                </div>

            <?php }
            ?>   

            <?php
            if ($this->countmodules('mod_articles')) {
                ?>
                <div class="articles_hoder">
                    <div class="container">
                        <jdoc:include type="modules" name="mod_articles" style="web" />
                        <div class="cls"></div>
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





            <!--component-->
            <?php
            if ($this->countmodules('right')) {
                ?>
               
                    <div class="container"> <div class="row">
                        <div id="leftside" class="col-md-8 no-padding">
                            <div class="leftside_in">
                                <jdoc:include type="modules" name="center_top" style="web" />
                                <jdoc:include type="component" style="web"/>  
                                <?php
                                if ($this->countmodules('position1')) {
                                    ?>
                                        <div class="free_content_one">
                                            <jdoc:include type="modules" name="position1" style="web"/>
                                        </div>
          <?php } ?>

                                <jdoc:include type="modules" name="mod_team" style="web"  />

                                <jdoc:include type="modules" name="image1" style="web" />
                                <jdoc:include type="modules" name="center_bot" style="web" />
                            </div>  
                        </div>
                        <div id="rightside" class="col-md-4">
                            <div class="rightside_in ">   
                                <jdoc:include type="modules" name="right" style="web" />   
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
                    <jdoc:include type="modules" name="simple_menu" style="web"/> 
                    <jdoc:include type="modules" name="center_bot" style="web"/> 
                </div>
                <?php
            }
            ?>
            <!--component end-->



            <!--start footer-->








        </div>


        <div id="footer">
            <div class="footer_top"> 
                <div class="container">
                    <div class="footer_logo col-md-4 col-sm-4 col-xs-12">

                        <?php
                        if ($this->countmodules('logo')) {
                            ?>
                            <div class="footer_logo_hold">                      
                                <jdoc:include type="modules" name="logo" />
                            </div>
                        <?php }
                        ?>
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

                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <?php
                        if ($this->countmodules('mod_contact_footer')) {
                            ?>    
                            <div class="mod_contact_footer">
                                <jdoc:include type="modules" name="mod_contact_footer" style="web"/> 
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-12">
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
                    <div class="cls"></div>
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