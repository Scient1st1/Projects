<?php
/**
* @version		$Id: mod_back.php 22 2011-07-22 22:45:28Z a.kikabidze $
* @package	Modules
* @copyright	Copyright (C) 2009 - 2011 WebSolutions LLC. All rights reserved.
* @license		GNU General Public License version 2 or later
*/

defined('_JEXEC') or die('Restricted access');
require_once (dirname ( __FILE__ ) . DS . 'helper.php') ;

require(JModuleHelper::getLayoutPath ( 'mod_image' )) ;
// Include the syndicate functions only once
