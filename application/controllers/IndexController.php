<?php

class IndexController extends Zend_Controller_Action {

  protected $_em;

  public function init()
  {
    /* Initialize action controller here */
    $this->_service = new App_Services_User();
  }

  public function indexAction()
  {

    $this->_helper->flashMessenger->setNameSpace('success')->addMessage('User added.');
    $this->_helper->flashMessenger->setNameSpace('info')->addMessage('User could not be added.');
    $this->_helper->flashMessenger->setNameSpace('error')->addMessage('Please complete the form errors.');

       
    $user = $this->_service->fetchOneBy(
            array('id' => 1), array('hydrate' => true));
    Zend_Debug::dump($user);

    $this->view->actionContent = 'action-content';


    $data = App_Services_Json::jsonData();
    Zend_Debug::dump($data);

    $x = App_Plugins_Welcome::hello();
    echo $x;
  }

  public function baseCssAction()
  {
      //$this->getHelper('layout')->disableLayout();
      //$this->_helper->viewRenderer->setNoRender(TRUE);
      $this->_helper->flashMessenger->setNameSpace('info')->addMessage('User could not be added.');
  }

}

