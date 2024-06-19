<?php

/**
 * @version		$Id: category.php 1 2011-07-13 05:09:23Z WS Team $
 * @package	WSCMS.Framework
 * @copyright	Copyright (C) 2009 - 2010 GoodWeb LTD. All rights reserved.
 * @license      Commercial License
 */
// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

/**
 * Renders a category element
 *
 * @package 	WSCMS.Framework
 * @subpackage		Parameter
 * @since		1.5
 */
class JElementMap extends JElement
{

    /**
     * Element name
     *
     * @access	protected
     * @var		string
     */
    protected $_name = 'Forms';

    public function fetchElement($name, $value, $node, $control_name)
    {
        $db = JFactory::getDBO();
        $class = $node->attributes('class');
        if (!$class)
        {
            $class = "inputbox";
        }


        $query = 'SELECT * FROM #__map WHERE `state` > -1 '.GoodWebSiteHelper::getWhere();



        $db->setQuery($query);
        $options = $db->loadObjectList();
        array_unshift($options, JHTML::_('select.option', '', '- ' . JText::_('Select Map') . ' -', 0, 'id', 'name'));
        return JHTML::_('select.genericlist', $options, '' . $control_name . '[' . $name . ']', 'class="' . $class . '"', 'id', 'name', $value, $control_name . $name);
    }

}