<?php

class Api_IndexController extends Zend_Controller_Action {

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        echo 'yebo';
        $this->_consumeTwitter();
    }

    public function consumeAction()
    {
        echo 'consume';
        $this->_helper->layout->disableLAyout();
        $this->getHelper('viewRenderer')->setNoRender(true);
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
