<?php
/**
* @version		$Id: mod_similar.php 
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
  
// no direct access
defined('_JEXEC') or die('Restricted access');

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$markers = modMapHelper::getData($params);
$map = modMapHelper::getMap($params);
$category = modMapHelper::getCategory($params);
$heigth = modMapHelper::getHeigth($params);
$width = modMapHelper::getWidth($params);

//$categories = modCatArticlesHelper::getCategories($params);
require(JModuleHelper::getLayoutPath('mod_map'));

