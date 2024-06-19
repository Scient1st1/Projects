<?php
defined('_JEXEC') or die('Restricted access');

$Itemid = wsHelper::getItemid('catalog', 'item');
jimport('imagehelper.gwimage');
$params = $this->params;
$wspic = new GWimage();
$wspic->setCacheDir('pictures');
$imageSize = $params->get('item_image_codename', '1');
$doc = JFactory::getDocument();
$title = $doc->title;
$row = $this->data;
$PayLink = JRoute::_('index.php?option=catalog&view=pay&layout=confirm&Itemid=' . $Itemid . '&item=' . $row->id);
$Count = $this->count != NULL ? (int) $this->count : 1;
$siteconfig = GoodWebSiteHelper::getSiteCfg();
//print_r($siteconfig);
$deliver_price = 0;
$fast_deliver_price = 0;
$outtbilisi_deliver_price = 0;
$outtbilisi_fast_deliver_price = 0;
if ($siteconfig->Deliver->deliver) {
    $deliver_price = $siteconfig->Deliver->deliver_standard_price_tbilisi;
    $fast_deliver_price = $siteconfig->Deliver->deliver_fast_price_tbilisi;
    $outtbilisi_deliver_price = $siteconfig->Deliver->deliver_standard_price_out_tbilisi;
    $outtbilisi_fast_deliver_price = $siteconfig->Deliver->deliver_fast_price_out_tbilisi;
}
/* @var $mainframe JApplication */
global $mainframe;
$mainframe->setPageTitle(' - ' . $row->name);
?>
<div class="page_body_products">
    <div class="container no-padding">
        <div class="container_in_bg">
            <div class="page_title">
                <span>
                    <?php echo $row->name ?>
                </span>
            </div>
            <?php
            if ($row->discount) {
                $RealAmount = floatval($row->discount);
            } else {
                $RealAmount = floatval($row->price);
            }

            $FirstName = trim(JRequest::getVar('firstname', ''));
            $LastName = trim(JRequest::getVar('lastname', ''));
            $Email = trim(JRequest::getVar('email', ''));
            $Mobile = trim(JRequest::getVar('mobile', ''));
            $deliver = trim(JRequest::getVar('deliver', 0));
            $in_tbilisi = trim(JRequest::getVar('in_tbilisi', 1));
            $deliver_address = trim(JRequest::getVar('deliver_address', ''));
            $fast_deliver = trim(JRequest::getVar('fast_deliver', 0));
            $deliver_person = trim(JRequest::getVar('deliver_person', ''));
            $deliver_person_comment = trim(JRequest::getVar('deliver_person_comment', ''));

            if ($siteconfig->Deliver->deliver) {
                if ($deliver) {
                    $deliver_price = $siteconfig->Deliver->deliver_standard_price_tbilisi;
                    if ($deliver && $fast_deliver && !$in_tbilisi) {
                        $deliver_price = $siteconfig->Deliver->deliver_fast_price_out_tbilisi;
                    } elseif ($deliver && !$fast_deliver && !$in_tbilisi) {
                        $deliver_price = $siteconfig->Deliver->deliver_standard_price_out_tbilisi;
                    } elseif ($deliver && $fast_deliver && $in_tbilisi) {
                        $deliver_price = $siteconfig->Deliver->deliver_fast_price_tbilisi;
                    }
                }
            }
            ?>

            <form method="post" action="<?php echo $PayLink; ?>" id="catalogForm">
                <input type="hidden" name="count" value="<?php echo $Count; ?>">
                <div class="pay_rows col-md-6">
                    <div class="pay_row">

                        <div  class=" pay_sum_text">
                            <?php echo JText::_('Unit price') . ': '; ?>

                        </div>
                        <div class="pay_values " id="pay_values">
                            <?php echo $RealAmount; ?> <?php echo JText::_('GEL'); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="pay_row">

                        <div  class="pay_sum_text">
                            <?php echo JText::_('Count') . ': '; ?>

                        </div>
                        <div class="pay_values ">
                            <?php echo $Count; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="pay_row">

                        <div  class="pay_sum_text">
                            <?php echo JText::_('Total Price') . ': '; ?>

                        </div>
                        <div class="pay_values ">
                            <?php echo $RealAmount * $Count; ?> <?php echo JText::_('GEL') . "&nbsp"; ?>
                            <span id="delivery_added_price"></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="pay_rows col-md-6">

                    <div class="pay_row">
                        <div class="form-group">
                            <label class="pay_label">
                                <?php echo JText::_('firstname'); ?>
                            </label>
                            <div class="pay_values">
                                <input type="text" value="<?php echo $FirstName; ?>" name="firstname" title="" class="placeholder form-control catalog_name">
                                <span class="must_have">*</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="pay_label">
                                <?php echo JText::_('lastname'); ?>
                            </label>
                            <span class="pay_values">
                                <input type="text" value="<?php echo $LastName; ?>" name="lastname" title="" class="placeholder form-control catalog_name">
                                <span class="must_have">*</span>
                            </span>
                        </div>
                    </div>

                    <div class="pay_row">
                        <div class="form-group">
                            <label class="pay_label">
                                <?php echo JText::_('Email'); ?>
                            </label>
                            <span class="pay_values">
                                <input type="text" value="<?php echo $Email; ?>" name="email" title="" class="placeholder form-control catalog_mail">
                                <span class="must_have">*</span>
                            </span>
                        </div>
                        <div class="form-group">
                            <label class="pay_label">
                                <?php echo JText::_('Mobile'); ?>
                            </label>
                            <span class="pay_values">
                                <input type="text" value="<?php echo $Mobile; ?>" name="mobile" title="" class="form-control catalog_mobile">
                                <span class="must_have">*</span>
                            </span>
                        </div>
                    </div>

                    <?php
                    if ($siteconfig->Deliver->deliver) {
                        if (!$siteconfig->Deliver->required_deliver) {
                            ?>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input id="notdeliver" type="radio" name="deliver" value="0" <?php
                                    if ($deliver == 0) {
                                        echo 'checked';
                                    }
                                    ?>><?php echo JText::_('Not deliver'); ?>
                                </label>
                                <label class="radio-inline">
                                    <input id="deliver" type="radio" name="deliver" value="1" <?php
                                    if ($deliver == 1) {
                                        echo 'checked';
                                    }
                                    ?>><?php echo JText::_('Deliver'); ?>
                                </label>
                            </div>
                        <?php } ?>

                        <div id="deliver_active" class="deliver_active <?php
                        if ($deliver == 1) {
                            echo 'deliver_params_show';
                        }
                        ?>" <?php
                        if ($siteconfig->Deliver->required_deliver) {
                            echo 'style="display: block;"';
                        }
                        ?> >
                            <div class="form-group <?php
                            if ($deliver == 1) {
                                echo 'deliver_params_show';
                            }
                            ?>">
                                <label class="radio-inline">
                                    <input type="radio" name="in_tbilisi" value="1" <?php
                                    if ($in_tbilisi == 1) {
                                        echo 'checked';
                                    }
                                    ?>><?php echo JText::_('In Tblisi'); ?>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="in_tbilisi" value="0"<?php
                                    if ($in_tbilisi == 0) {
                                        echo 'checked';
                                    }
                                    ?>><?php echo JText::_('Out Of Tblisi'); ?>
                                </label>
                            </div>
                            <div class="form-group <?php
                            if ($deliver == 1) {
                                echo 'deliver_params_show';
                            }
                            ?>">
                                <label class="pay_label">
                                    <?php echo JText::_('Address'); ?>
                                </label>
                                <span class="pay_values">
                                    <input type="text" name="deliver_address" class="form-control" value="<?php echo $deliver_address; ?>">
                                    <span class="must_have">*</span>
                                </span>
                            </div>
                            <div class="form-group <?php
                            if ($deliver == 1) {
                                echo 'deliver_params_show';
                            }
                            ?>">

                                <input type="hidden" name="fast_deliver" value="0" />

                            </div>

                            <div class="form-group <?php
                            if ($deliver == 1) {
                                echo 'deliver_params_show';
                            }
                            ?>">
                                <label class="pay_label">
                                    <?php echo JText::_('Deliver Person'); ?>
                                </label>
                                <span class="pay_values">
                                    <input type="text" name="deliver_person" class="form-control" value="<?php echo $deliver_person; ?>">
                                    <span class="must_have">*</span>
                                </span>
                            </div>
                            <?php
                            if ($siteconfig->Deliver->deliver_additional_field) {
                                ?>
                                <div class="form-group <?php
                                if ($deliver == 1) {
                                    echo 'deliver_params_show';
                                }
                                ?>">
                                    <label class="pay_label comment_label">
                                        <?php echo $siteconfig->Deliver->deliver_additional_field_comment; ?>
                                    </label>
                                    <span class="pay_values">
                                        <textarea name="deliver_person_comment" class="form-control"><?php echo $deliver_person_comment; ?></textarea>
                                        <span class="must_have">*</span>
                                    </span>
                                </div>
                            <?php } ?> 

                            <div class="form-group">



                            </div>
                        </div><?php } ?>
                    <div class="pay_btn">
                        <button type="submit">
                            <?php echo JText::_('PAY'); ?>
                        </button>
                    </div>
                </div>

                <div class="clr"></div> 
                <input type="hidden" value="<?php echo $row->id; ?>" name="product"  />
            </form>
            <div class="product_Item product_pay_page">
                <?php
                $ImagePath = DS . 'images' . DS . 'products' . DS . trim($row->sku) . '.jpg';
//$image = $wspic->getImage( $imageSize, $ImagePath );
                $image = GoodWebSiteHelper::getImageInSize('article', $row->image);
                $ImageLink = JURI::Root() . $row->image;
                ?>
                <div class="product_image">
                    <a href="<?php echo $ImageLink; ?>" title="" rel="lightbox">
                        <img src="<?php echo $image; ?>" alt="" align="left"/>
                    </a>
                </div>
                <div class="product_right">
                    <div class="product_title">
                        <?php echo $row->name; ?>
                    </div>

                    <!--new version-->

                    <?php
                    if ($row->discount == 0) {
                        ?>
                        <div class="productsale">
                            <span class="prod_price"> <?php echo JText::_('price'); ?>
                                :</span>
                            <span class="product_final_price"
                                  data-deliver-default="<?php echo $row->price; ?>"
                                  data-deliver ="<?php echo $deliver_price; ?>"
                                  data-fast-deliver ="<?php echo $fast_deliver_price; ?>"
                                  data-deliver-out ="<?php echo $outtbilisi_deliver_price; ?>"
                                  data-fast-deliver-out="<?php echo $outtbilisi_fast_deliver_price; ?>"
                                  ><?php echo $row->price; ?></span> <?php echo JText::_('GEL'); ?>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="product_price">
                            <span class="prod_price"> <?php echo JText::_('price'); ?>
                                :</span>
                            <span class="product_final_price" 
                                  data-deliver-default="<?php echo $row->price; ?>"
                                  data-deliver ="<?php echo $deliver_price; ?>"
                                  data-fast-deliver ="<?php echo $fast_deliver_price; ?>"
                                  data-deliver-out ="<?php echo $outtbilisi_deliver_price; ?>"
                                  data-fast-deliver-out="<?php echo $outtbilisi_fast_deliver_price; ?>"
                                  ><?php echo $row->price + $deliver_price; ?></span><?php echo JText::_('GEL'); ?>
                        </div>

                        <div class="productsale">
                            <?php echo JText::_('New Price'); ?>
                            :</span>
                            <?php echo $row->discount . ' ' . JText::_('GEL'); ?>
                        </div>
                    <?php } ?>

                    <!--new version-->
                    <div class="product_number">
                        <?php echo JText::_('code') . ' : ' . $row->sku; ?>

                    </div>


                    <?php
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
                </div>
                <div class="cls"></div>


            </div>
        </div>
    </div>
</div> 