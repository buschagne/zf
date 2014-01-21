<?php

class Plugins_Welcome  extends Zend_Controller_Plugin_Abstract{
	
	public function preDispatch(Zend_Controller_Request_Abstract $request) {
        
        //Zend_Debug::dump($request);
            
            echo 'Plugin';
    }

	static function hello(){
		
		return 'hello';
	}
}