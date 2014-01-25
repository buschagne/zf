<?php

class App_Plugins_Messenger extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        $flashMessenger         = Zend_Controller_Action_HelperBroker::getStaticHelper('flashMessenger');
        
        $messages               = array();
        $messages['success']    = $flashMessenger->setNameSpace('success')->getMessages();
        $messages['error']      = $flashMessenger->setNameSpace('error')->getMessages();
        $messages['info']       = $flashMessenger->setNameSpace('info')->getMessages();
        
        Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer')->view->messages = $messages;
    }
}