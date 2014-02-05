<?php

class Api_IndexController extends Zend_Controller_Action {

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        echo 'yebo';
        
        $cities = array(
          'London','Amsterdam','Paris','Johannesburg'  
        );
        
        try{
            $iterator = new ArrayIterator($cities);
            $iterator->seek(10);
        }catch (Exception $e){
            echo "Error: Something went wrong<br>";
            echo "Msg: ".$e->getMessage() . "<br>";
            echo "Code: ".$e->getCode(). "<br>";
            echo "File: ".$e->getFile() . "<br>";
            echo "Line: ".$e->getLine() . "<br>";
            echo "Backtrace: ".$e->getTraceAsString() . "<br>";
            
            
        }
    }

    public function consumeAction()
    {
        echo 'consume';
        $this->_consumeTwitter();
        $this->_helper->layout->disableLayout();
        $this->getHelper('viewRenderer')->setNoRender(true);
    }
    
    public function youtubeAction()
    {
        $client = new Zend_Gdata_YouTube();
        $feed = $client->getVideoFeed(
                'http://gdata.youtube.com/feeds/api/standardfeeds/most_popular?max-results=5'
                );
        $this->view->mostViewed = array();
        foreach ($feed as $entry) {
            $this->view->mostViewed[] = array(
              
                'title'=> $entry->getVideoTitle(),
                'rating'=> $entry->getVideoRatingInfo(),
                'category'=> $entry->getVideoCategory(),
           
                'watch'=> $entry->getVideoWatchPageUrl()                
            );
            
        }
        
    }

    protected function _consumeTwitter()
    {
        /*
          Note: In order to authenticate with Twitter, ALL applications MUST be registered with Twitter
          in order to receive a Consumer Key and Consumer Secret to be used when authenticating with OAuth.
         */

        $token = '308400083-F10Tg1YO03nJ4FIYhCfgqN7qecnnoV78osc2FBii';
        //$token = unserialize($serializedToken);

        $twitter = new Zend_Service_Twitter(array(
            'username' => 'add2_',
            'accessToken' => $token
        ));

        // verify user's credentials with Twitter
        $response = $twitter->account->verifyCredentials();
        Zend_Debug::dump($response);

        $user = $twitter->getUsername();
        Zend_Debug::dump($user);

        //$favs = $twitter->favoriteFavorites();
        //Zend_Debug::dump($favs);
    }

}

?>
