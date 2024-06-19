<?php
defined('_JEXEC') or die('Restricted access');

include_once dirname(__DIR__) . DS . 'helper.php';
$parsed = modImageWithPopupHelper::parseParams(C::_('_registry._default.data', $params));
?><div class="image_links"><div class="image_links_in">
<?php
foreach ($parsed as $k => $v) {
    $img = C::_('img', $v);
    $title = C::_('title', $v);
    $link1 = C::_('link1', $v);
    $title1 = C::_('title1', $v);
    $link2 = C::_('link2', $v);
    $title2 = C::_('title2', $v);
    $desc = C::_('desc', $v);

    if (C::_('link1target', $v) == 0) {
        $target1 = '_self';
    } else {
        $target1 = '_blank';
    }

    if (C::_('link2target', $v) == 0) {
        $target2 = '_self';
    } else {
        $target2 = '_blank';
    }

    $itemid = JRequest::getInt('Itemid');
    ?>
            <div class="image_link">
                <div class="image_link_inner">
                    <div class="img_link_img">
                        <div class="img_link_img_in">
                            <img src="<?= $img ?>">
                        </div>
                    </div>
                    <div class="image_link_info">
                        <h4><?= $title ?></h4>
                    </div>

                </div>

                <div class="image_pop_overlay"></div>

                <div class="image_popup_holder" style="display: none">
                    <div class="image_popup_box">
                        <div class="pop_image_link">
                            <img src="<?= $img ?>">
                        </div>
                        <div class="image_info_popup">
                            <h4><?= $title ?></h4>
                        </div>
                        
                        <div class="cls"></div>
                        <div class="image_desc_popup">
                            <span><?= $desc ?></span>
                        </div>  
                        <div class="image_butt_popup">
                            <?php if ($title1): ?>
                                <a target="<?php echo $target1; ?>" class="" href="<?php echo $link1; ?>">
                                    <span><?php echo $title1; ?></span>
                                </a>
                            <?php endif; ?>
                            <?php if ($title2): ?>
                                <a target="<?php echo $target2; ?>" class="" href="<?php echo $link2; ?>">
                                    <span><?php echo $title2; ?></span>
                                </a>
                            <?php endif; ?>
                        </div>

                       

                        <div class="cls"></div>
                    </div>
                     <button class="image_popup_close">
                            <span></span>
                        </button>
                    <div class="cls"></div>
                </div>
            </div>  

            <?php
        }
        ?>
    </div></div>
