<?php

defined ( '_JEXEC' ) or die ( 'Restricted access' ) ;

jimport ( 'wslib.helper' ) ;

class singlearticleHelper{
    
    public function getArticle($params){
        
        
        
        $limit = (int)$params->get('count',5);
        
        if(!$params->get('random_galleries')){
            $gids = (array)$params->get('gids');
            
            if(empty($gids)){
                return false;
            }
            $ids = array();
            foreach($gids as $one){
                if($one > 0){
                    $ids[] = (int)$one;
                }
            }
            if(empty($ids)){
                return false;
            }
            $in = '\''.implode('\', \'',$ids).'\'';
            $query_end = 'AND `a`.`id` in ('.$in.')';
            $ordering = 'rand()';
            $order = $params->get('order_gals');
            switch($order){
                case 5: $ordering = 'FIELD(`a`.`id` , '.$in.' )';break;
                case 4: $ordering = '`a`.`title` DESC';break;
                case 3: $ordering = '`a`.`title` ASC';break;
                case 2: $ordering = '`a`.`publish_up` DESC';break;
                case 1: $ordering = '`a`.`publish_up` ASC';break;

            }
            $query_end .= ' ORDER BY '.$ordering;
        }
        else{
            $query_end = ' ORDER BY rand() ';
        }
        $query_end .= ' LIMIT '.$limit;
        $db = JFactory::getDBO();
        global $mainframe;  
        $now = $mainframe->get( 'requestTime' );
        $nullDate = $db->getNullDate();
        $sql = 'SELECT  `a`.`id`, `a`.`catid`,`a`.`sectionid`,`a`.`publish_up`,`a`.`introtext`, `a`.`attribs`, `a`.`alias`, `a`.`title`,`c`.`alias` as `catalias` FROM #__content as `a` '
                . ' LEFT JOIN `#__categories` as `c` on `c`.`id` = `a`.`catid` '
                . ' WHERE `a`.`state` = "1" '
                . ' AND `a`.`sectionid` = "0" '
                . GoodWebSiteHelper::getWhere( false, false, '`a`' )
                . GoodWebSiteHelper::getLangWhere( 'a' )
                . ' AND ( `a`.`publish_up` = ' . $db->Quote( $nullDate )
                . ' OR `a`.`publish_up` <= ' . $db->Quote( $now ) . ' )'
                . ' AND ( `a`.`publish_down` = ' . $db->Quote( $nullDate )
                . ' OR `a`.`publish_down` >= ' . $db->Quote( $now ) . ' )'
                . $query_end;
        $db->setQuery($sql);
        $gal = $db->loadObjectList();
        if(empty($gal)){
            return false;
        }
        return $gal;
    }
}