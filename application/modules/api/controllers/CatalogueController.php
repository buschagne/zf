<?php

class Api_CatalogueController extends Zend_Controller_Action {

    public function init()
    {
        $this->apiBaseUrl = 'http://zf/api/catalogue';
        $this->_helper->layout->disableLayout();
        $this->getHelper('viewRenderer')->setNoRender(true);
    }

    public function indexAction()
    {        
        //handle GET requests        
    }

    public function getAction()
    {        
        //handle GET requests        
    }
    
    public function postAction()
    {        
        //handle POST requests        
    }
    
    public function putAction()
    {        
        //handle PUT requests        
    }

    public function deleteAction()
    {
        //handle DELETE requests                
        
    }

}

?>
