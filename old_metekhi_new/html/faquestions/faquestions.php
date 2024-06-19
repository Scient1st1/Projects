<?php

defined('_JEXEC') or die('Restricted access');

jimport('app.application.component.helper');
require_once(PATH_COMPONENT . DS . 'controller.php');

// Create the controller
$controller = new FaquestionsController();




$controller->execute(JRequest::getCmd('task'));

$controller->redirect();
