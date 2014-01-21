<?php

class IndexController extends Zend_Controller_Action
{

    protected $_em;    
    
    public function init()
    {
        /* Initialize action controller here */
        $this->_service = new Services_User();
    }

    public function indexAction()
    {
        
        $user = $this->_service->fetchOneBy(
                array('id' => 2), array('hydrate' => true));
        Zend_Debug::dump($user);
        
        $this->view->actionContent = 'action-content';
        
        
        $data = Services_Json::jsonData();
        Zend_Debug::dump($data);

        $x = Plugins_Welcome::hello();
        echo $x;
        
    }
    

}

