<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initWelcome()
    {
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new App_Plugins_Welcome());
    }
    

}

