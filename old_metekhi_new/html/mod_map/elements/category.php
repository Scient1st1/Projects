<?php

/**
 * @version        $Id: category.php 1 2011-07-13 05:09:23Z WS Team $
 * @package    WSCMS.Framework
 * @copyright    Copyright (C) 2009 - 2010 GoodWeb LTD. All rights reserved.
 * @license      Commercial License
 */
// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

/**
 * Renders a category element
 *
 * @package    WSCMS.Framework
 * @subpackage        Parameter
 * @since        1.5
 */
class JElementCategory extends JElement
{

    /**
     * Element name
     *
     * @access    protected
     * @var        string
     */
    protected $_name = 'Forms';

    public function fetchElement($name, $value, &$node, $control_name)
    {

        $db = JFactory::getDBO();
        $query = 'SELECT * FROM'
            . ' #__map_category'
            . ' WHERE ( `child_id` IS NULL'
            . ' OR `child_id` = 0 )'
            . ' AND `state` > -1'
            . ' ORDER BY `map_id`';


        $db->setQuery($query);
        $data = $db->loadObjectList();
        $this->GenerateJs($data);

    }

    private function GenerateJs($data)
    {
        $data = json_encode($data);
        $select = trim($this->_parent->get('category',null));
        $select = $select ? $select : "null";
        ?>
        <script><?php
            ob_start();?>
            var categorys = <?=$data?>;
            categorys = jQuery.parseJSON(JSON.stringify(categorys));
            var list = $('#paramscategory');
            var select = <?=$select?>;
            generateList();
            $('#paramsmap').change(function () {
               generateList();
            });


            function generateList() {
                var map_id = $('#paramsmap').val();
                if(parseInt(map_id) == 0){
                    list.find('option').remove().end();
                    var option = '<option value="">' + '<?=JText::_('please select map')?>' + '</option>';
                    list.append(option);
                }
                else{
                    list.find('option').remove().end();
                    list.append('<option value="0">' + "<?=JText::_('all category')?>" + '</option>');
                    for(var i =0;i<categorys.length;i++){
                        if(parseInt(categorys[i].map_id) == parseInt(map_id) ){
                            var selected = "";
                            if(select == categorys[i].id){
                                selected = 'selected';
                            }
                            else{
                                selected = "";
                            }
                            var option = '<option value="' + categorys[i].id + '" ' + selected +'>' + categorys[i].name + '</option>';
                            list.append(option);
                        }
                    }

                }
            }


            <?php $script = ob_get_clean();?>
        </script><?php
        $document = JFactory::getDocument();
        $document->addScriptDeclaration($script);

    }




}