<?php
/**
 * @version        $Id: helper.php 14401 2010-01-26 14:10:00Z louis $
 * @package        Joomla
 * @copyright    Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license        GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');


class modMapHelper
{

    public static function getData($params)
    {
        $lang = GoodWebSiteHelper::getLangWhere();
        $user = GoodWebSiteHelper::getUserID();
        $map = $params->get('map' , null);
        $category = $params->get('category');
        if($map){
            if($category == "0"){
                $query = 'SELECT * FROM #__map_marker WHERE `map_id` = '.$map.' AND `site` = '.$user.$lang.' AND `state` > -1';
            }
            else{
                $query = 'SELECT * FROM #__map_marker WHERE `map_id` = '.$map.' AND `site` = '.$user.' AND `category_id` = '.$category.$lang.' AND `state` > -1';
            }
            $db = JFactory::getDBO();
            $db->setQuery($query);
            return $db->loadObjectList();

        }
        else{
            return null;
        }


    }
    public static function getMap($params){
        $lang = GoodWebSiteHelper::getLangWhere();
        $user = GoodWebSiteHelper::getUserID();
        $map_id = $params->get('map' , null);
        $query = ' SELECT * FROM #__map WHERE `id` = '.$map_id.' AND `site` = '.$user.$lang.' AND `state` > -1';
        if($map_id){
            $db = JFactory::getDBO();
            $db->setQuery($query);
            return $db->loadObject();
        }
        else{
            return null;
        }
    }
    public static function getCategory($params){
        $lang = GoodWebSiteHelper::getLangWhere();
        $user = GoodWebSiteHelper::getUserID();
        $category_id = $params->get('category' , null);
        $query = ' SELECT * FROM #__map_category WHERE `id` = '.$category_id.' AND `site` = '.$user.$lang.' AND `state` > -1';
        if($category_id != "0"){
            $db = JFactory::getDBO();
            $db->setQuery($query);
            return $db->loadObject();
        }
        else{
            return null;
        }
    }


    public static function getHeigth($params){
        $heigth = $params->get('heigth');
        if($heigth == ""){
            return "300px";
        }
        elseif(strpos($heigth,"px")){
            $check = (int) str_replace("px","",$heigth);
            if($check < 100 && $check > 600){
                return "300px";
            }
            else{
                return $heigth;
            }
        }elseif(strpos($heigth,"%")){
            $check = (int) str_replace("%","",$heigth);
            if($check < 10 && $check > 70){
                return "60%";
            }
            else{
                return $heigth;
            }
        }

        return $heigth;
    }
    public static function getWidth($params){
        $width = $params->get('width');
        if($width == ""){
            return "40%";
        }
        elseif(strpos($width,"px")){
            $check = (int) str_replace("px","",$width);
            if($check < 100 && $check > 600){
                return "300px";
            }
            else{
                return $width;
            }
        }elseif(strpos($width,"%")){
            $check = (int) str_replace("%","",$width);
            if($check < 10 && $check > 70){
                return "40%";
            }
            else{
                return $width;
            }
        }
        return $width;
    }



}

