<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initWelcome()
    {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new App_Plugins_Welcome());
    }
    
    public function _initAutoloaderNamespaces()
    {
        //require_once APPLICATION_PATH . '/../library/vendor/Doctrine/lib/vendor/doctrine-common/lib/Doctrine/Common/ClassLoader.php';
        require_once APPLICATION_PATH . '/../library/Doctrine/Common/ClassLoader.php';

        $autoloader = \Zend_Loader_Autoloader::getInstance();
        $fmmAutoloader = new \Doctrine\Common\ClassLoader('Bisna');
        $autoloader->pushAutoloader(array($fmmAutoloader, 'loadClass'), 'Bisna');
    }
    
    protected function _initPlugins() {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new App_Plugins_Messenger);
  }

 
  protected function _initAddHelperPath() {
    //Initialize and/or retrieve a ViewRenderer object on demand via the helper broker
    $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
    $viewRenderer->initView(); //cannot use $****->view->anyFunction() if view is not initialized
    //add the global helper directory path - IMPORTANT add to view stack in LIFO order
    $viewRenderer->view->addHelperPath(APPLICATION_PATH . "/views/helpers");
    $viewRenderer->view->addScriptPath(APPLICATION_PATH . "/views/scripts");
  }
  
  protected function _initDoctype() {
    $doctypeHelper = new Zend_View_Helper_Doctype();
    $doctypeHelper->doctype('HTML5');
  }

  protected function _initHeadTitle() {
    $headTitleHelper = new Zend_View_Helper_HeadTitle();
    $headTitleHelper->headTitle('zf');
  }
}

