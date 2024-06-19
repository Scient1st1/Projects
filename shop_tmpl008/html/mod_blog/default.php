<?php
defined('_JEXEC') or die('Restricted access');
echo '<div class="blog_modul"><div class="blog_modul_in owl-carousel owl-theme owl-default">';
for ($i = 0; $i <= 20; $i++) {
    $text = $params->get('text' . $i, '');
    $buttontext = $params->get('buttontext' . $i, '');
    $buttonlink = trim($params->get('buttonlink' . $i, ''));
    $additionaltext = $params->get('additionaltext' . $i, '');
    $image = $params->get('image' . $i, '');
    $pimage = GoodWebSiteHelper::getImageInSize('modarticle', $image);
    if (!empty($text) || !empty($buttontext) || !empty($buttonlink) || !empty($additionaltext) || !empty($image)) {
        ?>
        <div class="blog_item ">
            <div class="blog_item_t"><?php echo $text; ?>
                <?php if (!empty($buttontext) && !empty($buttonlink)) { ?>

                <?php } ?>
            </div>
            <?php if (!empty($pimage)) { ?>
                <div class="blog_item_image"><img src="<?php echo $pimage; ?>" alt="<?php echo $text; ?>"/></div>
            <?php } ?>
            <span class="blog_item_bt"><a href="<?php echo $buttonlink ?>"><?php echo $buttontext; ?></a></span>


            <div class="blog_item_at"><?php echo $additionaltext; ?></div>
        </div>
        <?php
    }
}
echo '</div></div>';
