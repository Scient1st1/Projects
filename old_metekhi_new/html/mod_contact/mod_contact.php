<?php

/**
 * @package     Nivo-Szaki Slider
 * @link        http://szathmari.hu
 * @version     1.1
 * @copyright   Copyright (C) 2011 szathmari.hu
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
defined('_JEXEC') or die('Restricted access');
require_once (dirname(__FILE__) . DS . 'helper.php');

$data = ModContacHelper::GetInfo();
$data_map = ModContacHelper::GetMap();

require(JModuleHelper::getLayoutPath('mod_contact'));
