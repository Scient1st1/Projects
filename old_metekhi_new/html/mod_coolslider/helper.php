<?php

defined('_JEXEC') or die('Restricted access');

jimport('wslib.helper');

abstract class ModCoolSliderHelper
{

    public static function getArticles($params)
    {
        global $mainframe;
        $menu = $mainframe->getMenu();

        $db = JFactory::getDBO();


        $ordering = $params->get('orderby', 1);
        $dir_params = $params->get('direction', 1);




        $direction = $dir_params == 1 ? ' ASC ' : ' DESC ';
        switch ($ordering)
        {
            case 1:
                $orderby = ' ORDER BY `ca`.`ordering` ' . $direction;
                break;

            case 2:
                $orderby = ' ORDER BY rand() ';
                break;

            default:
                $orderby = ' ORDER BY `ca`.`ordering` ' . $direction;
                break;
        }

        $slidenumb = $params->get('slide_number');

        if (empty($slidenumb))
        {
            $slidenumb = 3;
        }

        $sl_group = $params->get('group_id', 0);


        $where = array();
        $where[] = ' `ca`.`published` = 1  ';
        $where[] = ' `ca`.`group_id` = ' . (int) $sl_group;
        $whereQ = count($where) ? ' WHERE (' . implode(') AND (', $where) . ')'
                . GoodWebSiteHelper::getWhere(false, false, '`ca`')
                . GoodWebSiteHelper::getLangWhere('`ca`') : GoodWebSiteHelper::getWhere(false, true, '`ca`')
                . GoodWebSiteHelper::getLangWhere('`ca`');

        $query = '#mod_coolslider/getArticles Query' . "\n"
                . ' SELECT  `ca`.*, `sc`.`title` as `gtitle` '
                . ' FROM `#__slider` AS `ca` '
                . ' LEFT JOIN `#__slidercats` as `sc` on `sc`.`id` = `ca`.`group_id` '
                . $whereQ
                . $orderby . ' limit ' . $slidenumb;
        ;

        $db->setQuery($query);
        $rows = $db->loadObjectList();


        $one = array();



        $i = 0;
        foreach ($rows as $value)
        {
            $one[$i]['gtitle'] = $value->gtitle;
            $one[$i]['link'] = '#';
            if (empty($value->image))
            {
                continue;
            }

            $one[$i]['defimg'] = $value->image;
           
            $one[$i]['src'] = GoodWebSiteHelper::getImageInSize('slider', $value->image);
            $onc[$i]['defimg'] = $value->image;
            $one[$i]['item_id'] = $value->id;
            $one[$i]['slider_position'] = $value->slider_position;
            $one[$i]['popup'] = $value->popup;

            //print $one[$i]['slider_position'];

            if ($value->show_title == 1)
            {
                $one[$i]['item_title'] = $value->title;
                $title = $one[$i]['item_title'];
            } else
            {
                $title = '';
            }

            if ($value->show_textarea == 1)
            {
                $one[$i]['slider_textarea'] = $value->slider_textarea;
                $slider_textarea = $one[$i]['slider_textarea'];
            } else
            {
                $slider_textarea = '';
            }
            if ($value->linktype == 1)
            {//Article
                //get artikle params
                $article = self::GetArticle($value->article);
                if (!empty($article))
                {
                    $link_artikle = JRoute::_(ContentHelperRoute::getArticleRoute($article->id . ':' . $article->alias, $article->catid . ':' . $article->catslug, 0));
                } else
                {
                    $link_artikle = '#';
                }
                $one[$i]['link'] = $link_artikle;
            }
            if ($value->linktype == 2)
            {//Category Link
                $cat = self::GetCategoryURL($value->selectcategory);
                if (!empty($cat))
                {
                    $link_cat = JRoute::_(ContentHelperRoute::getCategoryRoute($cat->id . ':' . $cat->alias, 0));
                } else
                {
                    $link_cat = '#';
                }
                $one[$i]['link'] = $link_cat;
            } else if ($value->linktype == 3)
            {//external
                $one[$i]['linktype'] = $value->linktype;
                $one[$i]['link'] = $value->external ? $value->external : '#';
            } else if ($value->linktype == 4)
            {//Menuitem Link
                $m = $menu->getItem($value->menu);
                if ($m)
                {
                    $link = JRoute::_($m->link . '&Itemid=' . $m->id);
                    $one[$i]['link'] = $link;
                } else
                {
                    $one[$i]['link'] = '#';
                }
            }

            $i++;
        }



        return $one;
    }

    //get from wslib/media/article
    public static function GetArticle($id)
    {
        $db = JFactory::getDBO();
        $query = '#mod_coolslider GetArticle query' . "\n"
                . ' SELECT'
                . '`a`.* ,'
                . '`c`.`alias` AS `catslug` '
                . ' FROM `#__content` AS `a` '
                . ' LEFT JOIN `#__categories` AS `c` ON `c`.`id` = `a`.`catid`'
                . ' WHERE `a`.`id` = ' . $id
        ;
        $db->setQuery($query);
        $rows = $db->loadObject();
        return $rows;
    }

    //get from wslib/media/article
    public static function GetCategoryURL($id)
    {

        $db = JFactory::getDBO();
        $query = '#mod_coolslider GetCategoryURL query' . "\n"
                . ' SELECT `c`.* '
                . ' FROM `#__categories` AS `c` '
                . ' WHERE `c`.`id` = ' . $id
        ;
        $db->setQuery($query);
        $rows = $db->loadObject();
        return $rows;
    }

}
