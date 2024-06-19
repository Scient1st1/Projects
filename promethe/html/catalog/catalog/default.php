<?PHP
/**
 * @version		$Id: default.php  2008-07-29
 * Teimuraz Kevlishvili
 */
// პირდაპირი წვდომის აკრძალვა
defined('_JEXEC') or die('Restricted access');
require_once JPATH_SITE . DS . 'components' . DS . 'catalog' . DS . 'helpers' . DS . 'Paramhelper.php';
$params = Param::getParams();
$Itemid = wsHelper::getItemid('catalog', 'catalog');
$limit = $params->limit;
//var_dump($limit);
jimport('imagehelper.gwimage');
$wspic = new GWimage();
$pagination = $this->pagination;
$showimage = $params->show_image;
$wspic->setCacheDir('pictures');
$imageSize = 9;
$doc = JFactory::getDocument();
$title = $doc->title;
$show_class = (int) $params->show_classificator;
$display = (int) $this->display_type;
$show_desc = (int) $this->Config->show_intro;
$show_price = (int) $this->Config->show_price;
$show_title = (int) $this->Config->show_title;
$config = JFactory::getConfig();
$Sitename = $config->getValue('sitename');
$catname = $this->Cat->name;
if ($title == $Sitename && $catname != NULL) {
    $doc->title = $catname;
}
?>
<div class="page_body_products">
    <div class="container no-padding">
        <div class="container_in_bg">
            <?php
            if ($this->params->get('show_page_title', 0)) {
                ?>
                <div class="page_title">
                    <span>  <?php
                        if ($this->Cat->name)
                            echo $this->Cat->name;
                        else
                            echo $title;
                        ?></span>
                </div>
                <?php
            }
            ?>

            <div class="subcategories">

                <?php
                if ($show_class == 1) {
                    if (count($this->List) > 0) {
                        foreach ($this->List as $row) {
                            ?>
                            <?php
                            if ($row[2] != '') {
                                $image = "<img src='" . $row[2] . "'>";
                            } else {
                                $image = " ";
                            }
                            ?>
                            <div><a href='index.php?option=catalog&view=catalog&id=<?php echo $row[1]; ?>'><?php
                                    echo $image;
                                    echo $row[0];
                                    ?></a> </div>
                            <?php
                        }
                    }
                }
                ?>

            </div>
            <?php
            if (count($this->data) > 0) {
                ?>
                <div class="row">
                    <?php
                    $k = 0;
                    $numberofproducts = sizeof($this->data);
                    foreach ($this->data as $row) {
                        // var_dump($row);
                        $ImagePath = $row->image;
                        $image = GoodWebSiteHelper::getImageInSize('catalog', $ImagePath);
                        $link = JRoute::_('index.php?option=catalog&view=item&Itemid=' . $Itemid . '&item=' . $row->id);
                        $PayLink = JRoute::_('index.php?option=catalog&view=item&Itemid=' . $Itemid . '&item=' . $row->id);

                        if ($k == 2) {
                            echo '<div class="cls"></div></div><div class="row">';
                            $k = 0;
                        }
                        $k ++;
//                    $ImagePath = $row->image;
//                    $image = GoodWebSiteHelper::getImageInSize('catalog', $ImagePath);
//                    $link = JRoute::_('index.php?option=catalog&view=item&Itemid=' . $Itemid . '&item=' . $row->id);
//                    $PayLink = JRoute::_('index.php?option=catalog&view=pay&Itemid=' . $Itemid . '&item=' . $row->id);
                        ?>
                        <div class="catalog_item col-md-6 col-sm-6">
                            <div class="catalog_item_in "><div class="catalog_item_ini ">
                                    <?php if ($show_title) { ?>
                                        <div class="catalog_item_title">
                                            <a href="<?php echo $link ?>">
                                                <?php echo $row->name; ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <?php //if($showimage){          ?>
                                    <div class="ItemImage">
                                        <a href="<?php echo $link ?>">
                                            <?php if ((int) $showimage == 1) { ?>
                                                <img src="<?php echo $image; ?>" alt="" />
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <?php // }         ?>

                                    <?php if ($show_desc == 1) { ?>
                                        <div class="catalog_item_desc_n_bot">
                                            <div class="catalog_item_desc">
                                                <?php echo $row->short_description; ?>
                                            </div>
                                        <?php } ?>


                                        <div class="catalog_item_bot">
                                            <?php
                                            $discount = (int) $row->discount;
                                            ?>

                                            <?php
                                            //if(!$showprice){
                                            if ($row->new) {
                                                ?> <div class="new"> <?php
                                                echo JText::_('new');
                                                ?> </div> <?php
                                            }

                                            if ($display !== 3 && $show_price == 1) {
                                                ?>
                                                <?php if ($discount == 0) { ?>                                                
                                                    <div class="catalog_item_price">
                                                        <?php echo $row->price . ' ' . JText::_('GEL'); ?>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="catalog_item_priceold">
                                                        <?php echo $row->price . ' ' . JText::_('GEL'); ?>
                                                    </div>
                                                    <div class="catalog_item_price">
                                                        <?php echo $row->discount . ' ' . JText::_('GEL'); ?>
                                                    </div>
                                                <?php } ?>
                                                <?php
                                            };
                                            // }
                                            ?>    

                                            <div class="cls"></div>	</div>
                                    </div>
                                    <div class="cls"></div>				
                                </div></div>    
                        </div>
                        <?php
                        //	$k = 1 - $k;
                    }
                }
                ?>
                <div class="cls"></div>	
            </div>

            <div id="pagination">
                <?php
                if ($this->Total > (int) $limit) {
                    echo $pagination->getPagesLinks();
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
//$order=JRequest::getInt('ordering',-1);
$order = $_SESSION['ordering'];
$doc = JFactory::getDocument();
$script = "    $(document).ready(function(){
                    $('#submitform').find('option[value=" . $order . "]').attr('selected','selected');
                    $('#reset').click(function(){
                        $('#submitform').find('option[value=0]').attr('selected','selected');
                        $('#submitform').submit();
                    });
                });";
$doc->addScriptDeclaration($script);
?>