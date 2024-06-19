<?php

defined('_JEXEC') or die();

jimport('app.application.component.model');

class FaquestionsModelFaquestions extends JModel
{

    public function getList()
    {
        $db = JFactory::getDBO();
        $sql = 'SELECT c.title as cattitle,'
                . ' c.description as catdesc, '
                . ' q.question, '
                . ' q.answer '
                . ' FROM #__faq_categories as c '
                . ' LEFT JOIN #__faq_quests '
                . ' as q ON c.id = q.catid '
                . ' WHERE (c.state = 1 OR q.catid = 0) '
                . ' AND q.state = 1 '
                . ' AND c.site = '. GoodWebSiteHelper::getUserID()
                . $this->getCatWhere('c')
                . GoodWebSiteHelper::getLangWhere( 'q' )
                . GoodWebSiteHelper::getLangWhere( 'c' )
                . ' order by c.id ASC';
                
        
        $db->setQuery($sql);
        $list = $db->loadObjectList();
        return $list;
    }
    function getCatWhere($prefix){
        $menu = JSite::getMenu()->getActive();
        $params = new JParameter( $menu->params );
        $faqcats = $params->get('faqcats', '');
        $faqcatstype = $params->get('faqcatstype', '');
        if ($faqcatstype == 1){
            return '';
        }
        else if ($faqcatstype == 2){
            if ($faqcats){
                return (is_array($faqcats)) ? ' AND '.$prefix.'.id IN ('.implode (',', $faqcats ).')' : ' AND '.$prefix.'.id = '.$faqcats;
            }
            return ' AND '.$prefix.'.id = -1';
        }
        return '';
    }
}
