<?php
/**
 * @package     Nivo-Szaki Slider
 * @link        http://szathmari.hu
 * @version     1.1
 * @copyright   Copyright (C) 2011 szathmari.hu
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
require_once (dirname( __FILE__ ) . DS . 'helper.php');


require_once JPATH_SITE . DS . 'components' . DS . 'content' . DS . 'helpers' . DS . 'route.php';


require(JModuleHelper::getLayoutPath( 'mod_coolslider' ));
