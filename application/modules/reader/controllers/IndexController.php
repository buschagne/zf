<?php

class Reader_IndexController extends Zend_Controller_Action {

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function feedAction()
    {
        
        $feed = Zend_Feed_Reader::import('http://news.tamboer.co.za/feed/');
        
        $this->view->feed = array(
            'title' => $feed->getTitle(),
            'description' => $feed->getDescription(),
            'url' => $feed->getLink(),
            
            
        );
        
        $feed->rewind();
        $entry = $feed->current();
        $this->view->entries = array(
            'title' => $entry->getTitle(),
            'description' => $entry->getDescription(),
            'url' => $entry->getLink(),
           
            
        );
    }

}

