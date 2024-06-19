<?php
/**
 * @package     Cool Slider
 * @link        http://szathmari.hu
 * @version     1.1
 * @copyright   Copyright (C) 2011 szathmari.hu
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();
$articles = ModCoolSliderHelper::getArticles($params);

$nav = '';
$width = $params->get('width', '100%');
$height = $params->get('height', '100%');
$speed = $params->get('speed', '5000');
$textanimate = GoodWebSiteHelper::getSiteCfg('effects.Slidergroup.textanimate');
$animaterepeat = GoodWebSiteHelper::getSiteCfg('effects.Slidergroup.animaterepeat');
$imageanimate = GoodWebSiteHelper::getSiteCfg('effects.Slidergroup.imageanimate');

if($imageanimate == 'No'){
    $imageanimate='';
}else{
    $imageanimate= 'animated '.$imageanimate;
}
if($textanimate == 'No'){
    $textanimate='';
}else{
    if($animaterepeat){
        $animaterepeat = ' infinite';
    }else{
        $animaterepeat='';
    }
    $textanimate= 'animated '.$textanimate.$animaterepeat;
}



$images = array();
$i = 0;
if($speed > '90000' || $speed < '2000'){
    $speed = '5000';
}

foreach ($articles as $value) {
    if($i ===0){
        $firstactive = ' actiuris'; 
    }else{
        $firstactive ='';
    }
    if (empty($value['item_title'])) {
        $title = '';
    } else {
        $title = $value['item_title'];
    }

    if (empty($value['slider_textarea'])) {
        $slider_textarea = '';
    } else {
        $slider_textarea = $value['slider_textarea'];
    }



    switch ($value['slider_position']) {
        case 1:
            $position = "right_top";
            break;
        case 2:
            $position = "left_top";
            break;
        case 3:
            $position = "right_bottom";
            break;
        case 4:
            $position = "left_bottom";
            break;
        case 5:
            $position = "center";
            break;
        default:
            $position = "left_top";
            break;
    }
   
    $link = '';
    if ($value['link'] != '#') {
        if ($value['linktype'] == 3 && $value['popup'] == 1) {
            $link = '<a  rel="prettyPhoto" href="' . $value['link'] . '?iframe=true&width='.$width.'&'.$height.'" title="' . htmlspecialchars( $title, ENT_QUOTES ) . '" target="_blank"><img class="'.$imageanimate.'" src="' . $value['src'] . '" alt="" /></a>';
            $title_link = '<a rel="prettyPhoto" href="' . $value['link'] . '?iframe=true&width='.$width.'&'.$height.' " title="' . htmlspecialchars( $title, ENT_QUOTES ) . '" target="_blank">' . $title . '</a>';
        } else if ($value['linktype'] == 3 && $value['popup']==0) {
            $link = '<a href="' . $value['link'] . '"  target="_blank"><img class="'.$imageanimate.'"src="' . $value['src'] . '" alt="" /></a>';
            $title_link = '<a  href="' . $value['link'] . '"  target="_blank">' . $title . '</a>';
        } else {
            $link = '<a  href="' . $value['link'] . '"><img class="'.$imageanimate.'" src="' . $value['src'] . '" alt="" /></a>';
            $title_link = '<a  href="' . $value['link'] . '">' . $title . '</a>';
        }
    } else {
        $link = '<img class="'.$imageanimate.'" src="' . $value['src'] . '" alt="" />';
        $title_link = $title;
    }
    if (empty($value['item_title']) && empty($value['slider_textarea'])) {
        $images[] = '<div  class="gw_slide n' . $i .$firstactive. '">'
                . '<div class="gw_slide_fix">' . $link . '</div>'
                . '</div>';
        $nav .= '<div class="n' . $i . ' cslider-control"></div>';
        $i++;
    }
    if (!empty($value['item_title']) && !empty($value['slider_textarea'])) {
        $images[] = '<div  class="gw_slide n' . $i .$firstactive. '">'
                . '<div class="gw_slide_fix">' . $link . '</div>'
                . '<div class="slider_text s' . $position .' '. $textanimate . '">'
                . '<div class="slider_text_in">'
                . '<div class="slider_title">' . $title_link . '</div>'
                . '<div class="slider_desc">' . $slider_textarea . '</div>'
                . '</div>'
                . '</div>'
                . '</div>';
        $nav .= '<div class="n' . $i . ' cslider-control"></div>';
        $i++;
    }
    if (!empty($value['item_title']) && empty($value['slider_textarea'])) {
        $images[] = '<div  class="gw_slide n' . $i .$firstactive. '">'
                . '<div class="gw_slide_fix">' . $link . '</div>'
                . '<div class="slider_text s' . $position .' '. $textanimate . '">'
                . '<div class="slider_text_in">'
                . '<div class="slider_title">' . $title_link . '</div>'
                . '</div>'
                . '</div>'
                . '</div>';
        $nav .= '<div class="n' . $i . ' cslider-control"></div>';
        $i++;
    }
    if (empty($value['item_title']) && !empty($value['slider_textarea'])) {
        $images[] = '<div  class="gw_slide n' . $i .$firstactive. '">'
                . '<div class="gw_slide_fix">' . $link . '</div>'
                . '<div class="slider_text s' . $position .' '. $textanimate . '">'
                . '<div class="slider_text_in">'
                . '<div class="slider_desc">' . $slider_textarea . '</div>'
                . '</div>'
                . '</div>'
                . '</div>';
        $nav .= '<div class="n' . $i . ' cslider-control"></div>';
        $i++;
    }
}

$OutPut = implode('', $images);
?>
<div  class="coolslider_bg_id">
    <?php if (!empty($value['gtitle']) && $params->get('show_cat', 0)) { ?>
        <div class="slider-group"><?php echo $value['gtitle']; ?></div>
    <?php } ?>
    <div class="coolslider_bg">
        <div class="coolslider" >
            <div class="cool_images"  data-speed="<?php echo $speed;?>">
                <?php echo $OutPut; ?>


            </div>

        </div>

        <div class="controlNavCon">
            <div class="cslider-controlNav">

                <?php echo '' . $nav . ''; ?>
                <div class="cls"></div>

            </div>
        </div>
        <?php if ($params->get('arrows', 1)) { ?>
            <div class="slider_arrow_id"><div class="slider_arrow">

                    <div class="next_slide"> </div>
                    <div class="prev_slide"> </div>

                </div> </div>
        <?php } ?>
    </div>
</div>
