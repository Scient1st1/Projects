<?php

defined('_JEXEC') or die('Restricted access');

jimport('wslib.helper');

abstract class ModContacHelper
{

    public static function GetInfo()
    {

        $db = JFactory::getDBO();
        $query = '#mod_contact/GetInfo()  Query' . "\n"
                . ' SELECT * '
                . ' FROM `#__contact` '
                . ' WHERE `site` = ' . GoodWebSiteHelper::getUserID()
                . GoodWebSiteHelper::getLangWhere()
        ;
        $db->setQuery($query);
        $result = $db->loadObject();
        $rows = json_decode($result->params);
        
        
        return $rows;
    }
    public static function GetMap()
    {

        $db = JFactory::getDBO();
        $query = ' SELECT * '
                . ' FROM `#__config` '
                . ' WHERE `id` = ' . GoodWebSiteHelper::getUserID()
                
        ;
        
        $db->setQuery($query);
        $result = $db->loadObject();
        $rows = json_decode($result->params);
        
        
       
        return $rows;
    }

}
