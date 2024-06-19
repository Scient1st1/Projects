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
class JElementCatcreate extends JElement
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
        $class = $node->attributes('class');
        if (!$class)
        {
            $class = "inputbox";
        }

        $options[] = JHTML::_('select.option', '0', '- ' . JText::_('Select Category') . ' -', 0, 'id', 'name');
        return JHTML::_('select.genericlist', $options, '' . $control_name . '[' . $name . ']', 'class="' . $class . '"', 'id', 'name', $value, $control_name . $name);

    }

}