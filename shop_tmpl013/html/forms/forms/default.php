<?php
/**
 * $Id: default.php 11917 2009-05-29 19:37:05Z ian $
 */
defined('_JEXEC') or die('Restricted access');

if ($this->params->get('show_page_title', 1)) {
    ?>
    <div class="page_title">
        <h1>
            <?php echo $this->form->title; ?>
        </h1>
    </div>
    <?php
}


$itemid = FormsController::getItemid('forms', 'forms', 'default', $this->form->id);
//$itemid = wsHelper::getItemid('forms', 'forms');
$link = 'index.php?option=forms&view=forms&Itemid=' . $itemid;
?>
<div id="page_body">
    <div class="Form_infos">
<?php if ($this->params->get('show_predesc', 0)) { ?>
            <div class="pre-desc">
            <?php echo $this->form->pre_text; ?>
            </div>
            <?php } ?>
        <form action = "<?php echo JRoute::_($link); ?>" method = "post" name = "emailForm" id = "emailForm" class = "Forms-validate">
        <?php echo $this->Forms ?>
            <!--CAPTCHA -->
            <?php if (is_object($this->captcha)) { ?> 
                <div class="item_form_captcha">
                    <div class="item_label_captcha">
                        <div class="item_label_captcha_in">
                            <label id="captcha" for="regcaptcha" class="param_lbl">
    <?php echo JText::_('CAPTCHA'); ?><span class="must_have">*</span> :
                            </label>
                        </div>
                    </div>
                    <div class="item_box_captcha">
                        <div class="reg_item">
                            <div class="reg_chk_cptcha">
    <?php echo $this->captcha->render(); ?>
                                <div class="cls"></div>
                            </div>
                            <div class="capcha_input">
                                <input type="text" name="captcha" id="regcaptcha" size="40" value="" class="inputbox required captchainput inputbox_reg" maxlength="50" />
                            </div>
                            <div class="cls"></div>
                        </div>
                    </div>
                    <div class="cls"></div>
                </div>
<?php } ?> 
            <!--END CAPTCHA -->    
            <?php if ($this->params->get('show_subdesc', 0)) { ?>
                <div class="post-desc">
                <?php echo $this->form->post_text; ?>
                </div>
                <?php } ?>
            <div class="item_butt">
                <div class="item_box_button">
                    <button class="button validate" type="submit" ><?php echo JText::_('send'); ?></button>
                </div>
            </div>
            <div class="cls"></div>

            <input type="hidden" name="id" value="<?php echo $this->form->id; ?>" />
            <input type="hidden" name="option" value="forms" />
            <input type="hidden" name="view" value="forms" />
            <input type="hidden" name="task" value="submit" />
        </form>

    </div>
</div>
