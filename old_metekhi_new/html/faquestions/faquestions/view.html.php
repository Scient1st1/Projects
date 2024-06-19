<?php

defined('_JEXEC') or die();

jimport('app.application.component.view');

class FaquestionsViewFaquestions extends JView
{

    public function display($tpl = null)
    {
        global $mainframe;
        $list = $this->get('List');

        $menu = $mainframe->getMenu();
        $active = $menu->getActive();
        
        $params = new JParameter($active->params);
        
        

        $this->assignRef('items', $list);
        $this->assignRef('params', $params);



        parent::display($tpl);
    }

}
