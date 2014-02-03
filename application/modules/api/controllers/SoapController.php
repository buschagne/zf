<?php

class Api_SoapController extends Zend_Controller_Action {

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {        
        $this->_soap();
    }

    protected function _soap()
    {
        $soap = new Zend_Soap_Client(
                'http://geocoder.us/dist/eg/clients/GeoCoderPHP.wsdl', array(
            'soap_version' => SOAP_1_1,
            'compression' => SOAP_COMPRESSION_ACCEPT
                )
        );
        
        $response = $soap->geocode('E Capitol St NE & 1st NE, Washington, DC');
        
        $this->view->results = array();
        foreach ($response as $r) {
            $this->view->results[] = array(              
                'zip'=> $r->zip,
                'latitude'=> $r->lat,
                'longtitude'=> $r->long                         
            );            
        }
        
        $this->view->request = $soap->getLastRequest();
        $this->view->response = $soap->getLastResponse();
        
    }

}

?>
