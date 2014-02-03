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
        //$this->_readFeed();
        $this->_createFeed2();
    }
        
      
    protected function _readFeed()
    {
    $url = 'http://news.tamboer.co.za/feed/atom/';
    $url1 = 'http://news.tamboer.co.za/wp-atom.php';
    $url2 = 'http://news.tamboer.co.za/?feed=atom';

        
        $feed = Zend_Feed_Reader::import($url);
        
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
    
    protected function _createFeed()
    {
        
        $output = array(
            'title' => 'New posts',
            'description' => 'http://zf/',
            'author' => 'author Name',
            'charset' => 'UTF-8',
            'entries' => array(),
            
            
        );
        
        $data = array(
            'title' => 'titel ....',
            'link' => 0,
            'description' => 'desc ....',
            'lastUpdate' => 'last updated ...',
        );
        $output['entries'] = $data;
        
        $feed = Zend_Feed::importArray($output, 'atom');
        
        $this->_helper->layout->disableLayout();
        $this->getHelper('viewRenderer')->setNoRender(true);
        
        $feed->send();
        exit();
        
    }
    
    protected function _createFeed2()
    {

        $entries = array(
            array(
            'id' => 8,
            'movie_title' => 'movie title ...' ,
            'movie_review' => 'movie review ...' ,
            'created' => 'date ...'
                ),
            array(
            'id' => 9,
            'movie_title' => 'movie title ...' ,
            'movie_review' => 'movie review ...' ,
            'created' => 'date ...'
                )          
        );
        

        $feedUri = '/rss/';
        //link from which feed is available
        $link = 'http://' . $_SERVER['HTTP_HOST'] . $feedUri;


        $feedArray = array(
            'title' => 'Student\'s Movie Club - Upcoming Movies',
            'link' => $link,
            'description' => 'Upcoming Movies',
            'language' => 'en-us',
            'charset' => 'utf-8',
     
            'generator' => 'Zend Framework Zend_Feed',
            'entries' => array()
        );
        
        foreach ($entries as $movie) {
            $feedArray['entries'][] = array(
                'title' => $movie['movie_title'],
                'link' => '/movie/view/id/' . $movie['id'],
                'description' => $movie['movie_review'],
                'pubDate' => $movie['created'],
                'guid' => 'http://' . $_SERVER['HTTP_HOST'] . '/movie/view/id/' . $movie['id']
            );
        }
        
        $this->_helper->layout->disableLayout();
        $this->getHelper('viewRenderer')->setNoRender(true);

        $feed = Zend_Feed::importArray($feedArray, 'rss');
        $feed->send();

    }

}

