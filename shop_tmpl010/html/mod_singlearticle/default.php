<?php
defined('_JEXEC') or die('Restricted access');
include_once (PATH_ROOT.DS.'components'.DS.'content'.DS.'helpers'.DS.'route.php');

?>
<div class="singlearticles">
    <div class="singlearticle-items">
        <?php $c = 1; foreach($articles as $article){ 
            
             $article_id = $article->alias ? $article->id.':'.$article->alias : $article->id;
        $cat_id = $article->catalias ? $article->catid.':'.$article->catalias : $article->catid;

        $link = $article->sectionid ? JRoute::_(ContentHelperRoute::getPhotogalleryRoute($article_id, $cat_id)) : JRoute::_(ContentHelperRoute::getArticleRoute($article_id, $cat_id));
            ?>
        <div class="singlearticle_item"><div class="singlearticle_item_in"><div class="singlearticle_item_ini">
        
        <?php if($params->get('show_main_image')){
            $artparams = new JParameter($article->attribs);
            $artimg = $artparams->get('image');
            if(!empty($artimg)){
                $image = GoodWebSiteHelper::getImageInSize('modarticle', $artparams->get('image'));
                ?>
                    <div class="singlearticle_image">
                <?php if($do_link = $params->get('link_image')){?>
                    <a href="<?php echo $link;?>" >
                <?php }?>
                    <img src="<?php echo $image;?>" alt="<?php echo $article->title;?>"/>
                <?php if($do_link){?>
                    </a>
                <?php } ?>
                    </div>
            <?php } ?>
        <?php } ?>
        <?php if($params->get('show_article_title') && !empty($article->title)){
            
             
            ?>    
                    
            <div class="singlearticle_title<?php echo $params->get('moduleclass_sfx'); ?>">
                <?php if($do_link = $params->get('link_title')){?>
                    <a href="<?php echo $link;?>" >
                <?php } ?>

                    <?php echo $article->title;?>

                <?php if($do_link){?>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
        <?php
            if ($params->get('show_intro')) {
                if (!empty($article->introtext)) {
                    ?>
                    <div class="singlearticle_intro">
                <?php echo $article->introtext; ?>
                    </div>
                <?php
                }
            }
            ?>
                    
        <div class="singlearticle_date_more"><?php
        $date = $article->publish_up;
        if ($date && $params->get('show_date')) {
            ?>
            <span class="singlearticle_date"><?php echo $date; ?></span>
            <?php
        }
        if ($params->get('show_btn')) {
            ?>
            <div class="singlearticle_readmore"> 
                <a href="<?php echo $link; ?>">
                    <?php echo JText::_('read more...'); ?>
                </a>
            </div>
             <div class="cls"></div>

            <?php
        }
        ?>
        </div><?php    
         echo '</div></div></div>'; 
        if($c%3 == 0 && $c < count($articles)){
            echo '<div class="cls"></div></div><div class="singlearticle-items">';
        }
        $c++;
        } ?>
     <div class="cls"></div>
      <?php
    $btnall = $params->get('more_btn_all');
    $btnalllink = $params->get('more_btn_link');
        if ($btnall && $params->get('show_btn_all')) {
            ?>
            <div class="singlearticle_all_readmore"> <a href="<?php echo $btnalllink; ?>">
            <?php echo $btnall; ?>
                </a>
            </div>
             <div class="cls"></div>
                
            <?php
        }
    ?>
    </div>
</div>