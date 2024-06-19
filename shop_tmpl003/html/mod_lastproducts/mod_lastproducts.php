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

$id = 0;
$similars = array();
$count = $params->get('count');


modlastproductsHelper::set_count($count);
$modarticles =& modlastproductsHelper::getlastproducts($params);
if(count($modarticles) > 0){
    require(JModuleHelper::getLayoutPath('mod_lastproducts'));
}