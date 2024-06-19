<?php
/**
* @version		$Id: helper.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
jimport('forms.iform');
jimport('forms.form');
jimport('forms.forms');

class modformsHelper {
    private static $count = 5;
    private static $db = '';
    static function getForms($formID)
    {
        $formID = (int)$formID;
        
        if ( empty( $formID ) )
        {
            return false;
        }

//        $submit = JRequest::getVar("task","", 'post');
//        
//        $params = NULL;
//        
//        if($submit === "submit")
//        {
//            $params = JRequest::getVar("userparams", array(), 'post');
//        }
        
        return JForms::renderForm($formID);
//        return $formID;
//        return var_dump($params);
//        return 1;
    }
    
    static function getpopularproduct($params){
        global $mainframe;
        $id = (int)$params->get('catid');
        $ordering = $params->get('ordering');
        
        self::$db =& JFactory::getDBO();
        $now = $mainframe->get( 'requestTime' );
	$nullDate = self::$db->getNullDate();
        $starttime=$params->get('startdate');

        $endtime=$params->get('end');

       
//        $query = 'SELECT `a`.`title`,`a`.`id`,`a`.`sectionid`, `introtext`, `a`.`alias`, `c`.`alias` as `catslug`, '
//                . '`attribs`, `publish_up`, `catid`'
//                . ' FROM `#__content` as `a`'
//                . ' left join `#__categories` as `c` on `c`.`id` = `a`.`catid` '
//                . ' WHERE `a`.`catid` = \''.$id.'\' '
//                . ' AND `a`.`state` = 1 '
//                . ' AND ( `a`.`publish_up` = ' . self::$db->Quote( $nullDate )
//                . ' OR `a`.`publish_up` <= ' . self::$db->Quote( $now ) . ' )'
//                . ' AND ( `a`.`publish_down` = ' . self::$db->Quote( $nullDate )
//                . ' OR `a`.`publish_down` >= ' . self::$db->Quote( $now ) . ' )'
//                //. ' AND `a`.`site` = '.GoodWebSiteHelper::getUserID()
//		. GoodWebSiteHelper::getLangWhere('`a`')
//                . ' order by '.$ordering.' '.$asc; 
        $query= 'SELECT * FROM  `#__catalog_products` as `c` WHERE `c`.`state`=1'
          //  . ' AND `c`.`site` = '.GoodWebSiteHelper::getUserID()
           // . ' and  `c`.`create_date` > '.$starttime.''
            .' ORDER BY `c`.`view` desc';
   
        //self::$db->setQuery($query,0,self::$count);
        self::$db->setQuery($query,0);
        $products=self::$db->loadObjectList();

        $counter=self::$count;

        return self::$db->loadObjectList();
        
        
    }
    static function set_count($count){
        self::$count = (int)$count;
    }
}