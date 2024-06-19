<?php
/**
 * $Id: default.php 11917 2009-05-29 19:37:05Z ian $
 */
//var_dump($id);
jimport('forms.iform');
jimport('forms.forms');
$form = JForms::getForm($id);
$captcha = JForms::setCaptcha($form->show_captcha, 'forms');
defined('_JEXEC') or die('Restricted access');

$itemid = wsHelper::getItemid('forms', 'forms');
$link = 'index.php?option=forms&view=forms&Itemid=' . $itemid . '&request_form_id=' . $id;
?>

<div class="col-md-push-2 col-md-8">
    <div class="mod_form_infos">
        <?php if ($params->get('show_predesc', 0)) { ?>
            <div class="mod_form_desc">
                <?php echo $form->pre_text; ?>
            </div>
        <?php } ?>
        <form action = "<?php echo JRoute::_($link); ?>" method = "post" name = "emailForm" id = "emailForm" class = "Forms-validate">
            <?php echo $modarticles ?>
            <!--CAPTCHA -->
            <?php if (is_object($captcha)) { ?>
                <div class="item_form_captcha">
                    <div class="item_label_captcha">
                        <div class="item_label_captcha_in">
                            <label id="captcha" for="regcaptcha" class="param_lbl">
                                <?php echo JText::_('CAPTCHA'); ?><span class="must_have">*</span> :
                            </label>
                        </div>
                    </div>
                    <div class="mod_form_captcha">
                        <div class="mod_form_item">
                            <div class="mod_form_chk_cptcha">
                                <?php
                                $controller_url = JRoute::_('index.php?option=forms&task=refreshCaptcha');
                                $captcha->setAjaxUrl($controller_url);
                                echo $captcha->render();
                                ?>
                                <div class="cls"></div>
                            </div>
                            <div class="mod_form_input">
                                <input type="text" name="captcha" id="regcaptcha" size="40" value="" class="inputbox required captchainput inputbox_reg" maxlength="50" />
                            </div>
                            <div class="cls"></div>
                        </div>
                    </div>
                    <div class="cls"></div>
                </div>
            <?php } ?> 
            <!--END CAPTCHA -->    
            <?php if ($params->get('show_subdesc', 0)) { ?>
                <div class="mod_form_desc">
                    <?php echo $form->post_text; ?>
                </div>
            <?php } ?>
            <div class="mod_form_butt">
                <div class="mod_form">
                    <button class="button validate" type="submit" ><?php echo JText::_('send'); ?></button>
                </div>
            </div>
            <div class="cls"></div>
            <input type="hidden" name="request_form_id" value="<?php echo $id; ?>" />
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="module" value="1" />
            <input type="hidden" name="option" value="forms" />
            <input type="hidden" name="view" value="forms" />
            <input type="hidden" name="task" value="submit" />
        </form>

    </div>
</div>
