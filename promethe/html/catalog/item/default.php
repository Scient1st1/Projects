<?PHP
/**
 * @version		$Id: default.php  2008-07-29
 * Teimuraz Kevlishvili
 */
// პირდაპირი წვდომის აკრძალვა
defined('_JEXEC') or die('Restricted access');
$Itemid = wsHelper::getItemid('catalog', 'item');
jimport('imagehelper.gwimage');
jimport('goodweb.GWsocials');
$params = $this->params;
$wspic = new GWimage();
$wspic->setCacheDir('pictures');
$imageSize = $params->get('item_image_codename', '1');
$doc = JFactory::getDocument();
$title = $doc->title;
$display_type = (int) $this->display_type;
$cfg = GoodWebSiteHelper::getSiteCfg();
$Photosize = $cfg->Photogallery;
$meta_key = strip_tags($this->data->meta_key);
$meta_desc = strip_tags($this->data->meta_desc);
$js = "$(document).ready(function(){ 
    $( '.swipebox' ).swipebox({
    afterClose: function() {}
    });
    $('.lilpics').click(function(){
     $('.actcat').removeClass('actcat');
        $(this).addClass('actcat');
        var id=$(this).attr('id');
        $('.sl_img_small').hide();
       $('.'+id).show(); 
    });
    
    var nextcat = function(){
        $('.lilpics:first-child').appendTo($( '.catgallery' ));
    };
    var prevcat = function(){
        $('.lilpics:last-child').prependTo($( '.catgallery' ));
    };
    $('.prevcat').click(function(){
        prevcat();
    });
    $('.nextcat').click(function(){
        nextcat();
    });
     var ts = '';
    var te = '';
    var el = document.getElementById('catgallery');
    el.addEventListener('touchstart', function (ev) {
        ts = ev.touches[0].clientX;

    }
    );
    el.addEventListener('touchend', function (ev) {
        te = ev.changedTouches[0].clientX;
       
        if (te + 20 < ts) {
           nextcat();
        }
        if (te - 20 > ts) {
             prevcat();
        }
    }
    );
    $('#zoomple_image_overlay').click(function(){
      $('.sl_img_small:visible ').click()
    });
    //$('#catgallery').width($('.sl_img_small img').width());
    
    $(window).resize(function () {
  // $('#catgallery').width($('.sl_img_small img').width());
});
        





});";
$doc->addScriptDeclaration($js);
$doc->setMetaData('keywords', $meta_key);
$doc->setMetaData('description', $meta_desc);
?>

<div class="page_body_products">
    <div class="container no-padding">
        <div class="container_in_bg">
            <?php $row = $this->data;
            ?>
            <div class="page_title">
                <span>  <?php echo $row->name; ?></span>
            </div>

            <div class="product_Item">
                <?php
                $ImageLink = JURI::Root() . $row->image;
                $lang = substr(JFactory::getLanguage()->get('tag'), 0, 2);
                $PayLink = JRoute::_($lang . '/component/catalog/?view=pay&item=' . $row->id);
                $mimage = GoodWebSiteHelper::getImageInSize('catalogbig', $row->image);
                $images = explode('|', $row->gallery);
                if ($mimage == FALSE) {
                    $mimage = GoodWebSiteHelper::getImageInSize('article', $row->image);
                }
                ?>
                <div class="product_image">
                    <div class="product_image_in">



                        <?php
                        if ($images[0] != '' && $row->gallery != '[]') {
                            ?>
                            <a rel="gallery-1" href="<?php echo $ImageLink; ?>" class="zoomple sl_img_small swipebox lilpic_0" >
                                <img  src="<?php echo $mimage; ?>" />
                            </a>
                            <?php
                            $images = explode('|', $row->gallery);
                            $ImageSize = new stdClass();
                            $ImageSize->cataloggallery = $Photosize;
                            $i = 0;
                            foreach ($images as $key => $image) {
                                $ImageLink = JURI::Root() . $image;
                                $listimg = GoodWebSiteHelper::getImageInSize("catalogbig", $image, $ImageSize);
                                if ($listimg == FALSE) {
                                    $listimg = GoodWebSiteHelper::getImageInSize('article', $image);
                                }
                                $fullimg = $image;
                                $i++;
                                ?>


                                <a rel="gallery-1" style="display:none;" href="<?php echo $fullimg; ?>" class="zoomple sl_img_small swipebox lilpic_<?php echo $i ?>">
                                    <img src="<?php echo $listimg; ?>">
                                </a>

                                <?php
                            }
                        } else {
                            ?>
                            <a rel="" href="<?php echo $ImageLink; ?>" class="zoomple sl_img_small " >
                                <img  src="<?php echo $mimage; ?>" />
                            </a>
                        <?php } ?>
                    </div> 

                    <?php
                    $mimage2 = GoodWebSiteHelper::getImageInSize('cataloggallery', $row->image);

                    if ($images[0] != '' && $row->gallery != '[]') {
                        ?>
                        <div id="catgallery">
                            <div class="prevcat selectDisable  icon-left-open"></div>
                            <div class="nextcat selectDisable  icon-right-open"></div>

                            <div class="catgallery">
                                <img src="<?php echo $mimage2; ?>" class="lilpics " id="lilpic_0"/>
                                <?php
                                $images = explode('|', $row->gallery);
                                $ImageSize = new stdClass();
                                $ImageSize->cataloggallery = $Photosize;
//                $test=new stdClass();
//                  $test->width='90';
//                  $test->height='90';
//                  $test->edit='3';
//                  $test->quality='80';
                                $i = 0;
                                if (sizeof((array) $ImageSize == 0)) {
                                    foreach ($images as $key => $image) {
                                        $ImageLink = JURI::Root() . $image;
                                        $listimg = GoodWebSiteHelper::getImageInSize("cataloggallery", $image, $ImageSize);
                                        $i++;
                                        ?>
                                        <img class="lilpics" id="lilpic_<?php echo $i ?>" src="<?php echo $listimg; ?>">
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>  
                        <?php
                    }
                    ?>

                </div>  
                <div class="product_right">
                    <?php
                    if ($row->sku) {
                        ?>

                        <div class="product_number">
                            <?php echo JText::_('code') . ' : ' . $row->sku; ?>

                        </div> <?php } ?>
                    <?php if ($display_type == 1 || $display_type == 2): ?> 
                        <?php
                        if ($row->discount == 0) {
                            ?>
                            <div class="productsale">
                                <span class="prod_price"> <?php echo JText::_('price'); ?>
                                    :</span>
                                <?php echo $row->price . ' ' . JText::_('GEL'); ?>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="product_price">
                                <span class="prod_price"> <?php echo JText::_('price'); ?>
                                    :</span>
                                <?php echo $row->price . ' ' . JText::_('GEL'); ?>
                            </div>

                            <div class="productsale">
                                <?php echo JText::_('New Price'); ?>
                                :</span>
                                <?php echo $row->discount . ' ' . JText::_('GEL'); ?>
                            </div>
                        <?php } ?>
                    <?php endif; ?>


                    <?php if ($display_type == 1): ?>
                        <?php
                        if (CatalogHelper::CheckOnSale($row->id)) {
                            ?>						
                            <div class = "prod_basket_temp_not_exists">
                                <?php echo JText::_('PRODUCT TEMPORARY NOT EXISTS'); ?>
                            </div>
                            <?php
                        } else if ($row->count) {
                            ?>
                            <form action="<?php echo $PayLink; ?>" method="post">
                                <div class="prodcount">
                                    <label><?php echo JText::_('Count'); ?></label>
                                    <?php
                                    $id = JRequest::getInt('item', 0);
                                    if ($id != 0) {
                                        $max = CatalogHelper::getCount($id);
                                    }
                                    ?>
                                    <input id="pcount" min="1" max="<?php echo $max; ?>" type="number" name="count" value="1">
                                    <input id="pcount" type="hidden" name="first" value="1">
                                </div>

                                <div class="prod_basket">
                                    <input type="submit" value="<?php echo JText::_('BUY'); ?>" >
                                </div>
                            </form>
                            <?php
                        } else {
                            ?>
                            <div class = "prod_basket_not_exists">
                                <?php echo JText::_('Product Not exists'); ?>
                            </div>
                            <?php
                        }
                        ?>
                    <?php endif; ?> 


                    <?php
                    if ($row->size) {
                        ?>
                        <div class="prod_desc">
                            <div class="prod_desc_title">
                                <?php echo JText::_('Size'); ?>
                            </div>
                            <?php echo $row->size; ?>
                        </div> <?php
                    }
                    if ($row->material) {
                        ?>
                        <div class="prod_desc">
                            <div class="prod_desc_title">
                                <?php echo JText::_('Material') ?> 
                            </div>

                            <?php echo $row->material; ?>
                        </div>
                        <?php
                    }
                    if ($row->description || $row->short_description) {
                        ?>
                        <div class="prod_desc">
                            <div class="prod_desc_title">
                                <?php echo JText::_('Description') ?> 
                            </div>
                            <?php echo $row->short_description; ?>
                            <?php echo $row->description; ?>
                        </div>
                    <?php } ?>
                    <div class="cls"></div>
                </div>

            </div>
            <?php
            if ($row->name) {
                $title = htmlspecialchars($row->name, ENT_QUOTES);
            } else {
                $title = '';
            }
            ?>
            <?php
            $doc->title = $title;
            $ItemLink = htmlspecialchars(JURI::root() . JRoute::_('index.php?option=catalog&view=item&Itemid=' . $Itemid . '&item=' . $row->id, false));
            jimport('shortener.shortener');
            $url = Shortener::CreateURL($row->id, 'catalog', 'item');
            JRequest::setVar('SHORT_URL', $ItemLink, 'method', true);
            $shares = GWsocials::getShares($url);
            if ($row->image && file_exists(PATH_ROOT . $row->image)) {
                $doc->AddMetaOGG('image', $ImageLink);
            }
            if (!empty($row->description)) {
                $temp = explode(' ', (strip_tags($row->description)));
                $text = implode(' ', array_slice($temp, 0, 20));
                $doc->AddMetaOGG('description', $text);
            }
            if (!empty($row->name)) {
                $doc->AddMetaOGG('title', trim(htmlspecialchars($row->name)));
            }
            jimport('goodweb.GWsocials');
            ?>

            <span class="prod_socials">
                <?php
                if ($shares) {
                    ?>
                    <div class="share"> 
                        <?php echo JText::_('Share'); ?>
                    </div>

                    <?php
                    echo $shares;
                }
                ?>


                <div class="clr"></div>
            </span> 
        </div>
    </div>
</div>
