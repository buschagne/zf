<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->actionContent = 'action-content';
        
        $data = Services_Json::jsonData();
        Zend_Debug::dump($data);

        $x = Plugins_Welcome::hello();
        echo $x;
    }


}

