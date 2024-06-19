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


$Device = $mainframe->get('device');

    $articles = ModCoolPartnersHelper::getArticles($params);
    $document->addScriptDeclaration('$("#partnerslogoslider").GW_MultiItemsSlider()');


$nav = '';
$show_title = $params->get('show_title'); 
$images = array();
$i = 0;
$slidenumb = $params->get('slide_number'); 

foreach ($articles as $value) {
    

    $active = $i === 0 ? "active" : "";    
    $link = '';
            if($show_title){
            $link = '<a href="' . $value['link'] . '" target="_blank"><img src="' . $value['src'] . '" alt="" />  <p class="title">'.$value['item_title'].'</p></a>';
            }else{
                $link = '<a href="' . $value['link'] . '" target="_blank"><img src="' . $value['src'] . '" alt="" /> </a>';
            }
            $desc = null;
            if(isset($value['description'])) {
                $desc = $value['description'];
            }
             $title=$value['item_title'];

        $images[] = '<li id="msii'.$i.'">'
              
                 . $link
                 . '<p style="width:160px;word-break: break-word;white-space: normal;text-align:center;display: inline-flex;">'.$desc.'</p>'
                 . '</li>'
        ;
        
        $bulets[] = '<div id="misb'.$i.'" class="multi_items_slider_bulet '.$active.'"></div>';
        $i++;
       
}

$OutPut = implode('', $images);
$buletsOutPut = implode('', $bulets);

?>

<div class="partner_intro">
<div id="partnerslogoslider" class="multi_items_slider_wrapper">
    <ul id="multi_items_slider">    
<?php echo $OutPut; ?>
    </ul>
    <?php
      if(count( $articles ) >= (int)$slidenumb )
      {  
    ?>
    <div class="multi_items_slider_prev icon-angle-left">

    </div>
    <div class="multi_items_slider_next icon-angle-right">

    </div> 
      <?php 
      }
      ?>
    <!--
    <div class="cslider-controlNav">
        <div class="cls"><?php //echo $buletsOutPut;?></div>
    </div>
    -->
</div>
    <?php if($params->get('show_readmore',1)){?>
<div class="partners-page-link">
    <?php
    $itemId = wsHelper::getItemid('partners','partners');
    if($itemId){
        $link = JRoute::_('index.php?option=partners&view=partners&Itemid='.$itemId);
    ?>
    <a href="<?php echo $link ?>"><?php echo JText::_("All Partners");?></a>
        
    <?php }?>
</div>
    <?php } ?>
</div>