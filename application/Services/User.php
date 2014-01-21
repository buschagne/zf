<?php

class Services_User {

    protected $_em;    

    protected function _getEm() {
        if ($this->_em == null) {
            $this->_em = Zend_Registry::get('doctrine')->getEntityManager();
        }
        return $this->_em;
    }

    protected function _getRepository() {
        return $this->_getEm()->getRepository('\Application\Entity\User');
    }

    public function fetchBy($criteria, $options) {
        $users = $this->_getRepository()->fetchBy($criteria, $options);
        return $users;
    }

    public function fetchOneBy($criteria, $options) {
        $user = $this->_getRepository()->fetchOneBy($criteria, $options);
        return $user;
    }

    public function datatables($params) {
        return $this->_getRepository()->datatables($params);
    }

    public function getForm() {   

    }

    public function authenticate($credentials, $options) {
        echo $credentials;
        echo $options;
    }


    
}