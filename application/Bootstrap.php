<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initWelcome()
    {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new Plugins_Welcome());
    }
    
    public function _initAutoloaderNamespaces()
    {
        //require_once APPLICATION_PATH . '/../library/vendor/Doctrine/lib/vendor/doctrine-common/lib/Doctrine/Common/ClassLoader.php';
        require_once APPLICATION_PATH . '/../library/Doctrine/Common/ClassLoader.php';

        $autoloader = \Zend_Loader_Autoloader::getInstance();
        $fmmAutoloader = new \Doctrine\Common\ClassLoader('Bisna');
        $autoloader->pushAutoloader(array($fmmAutoloader, 'loadClass'), 'Bisna');
    }
}

