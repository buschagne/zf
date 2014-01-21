<?php

namespace Application\Entity\Repository\Base;

use Doctrine\ORM\EntityRepository;

class BaseRepository extends EntityRepository {

    /**
     * An instance of the Entity Manager
     */
    protected $_em = null;

    public function init() {
        $this->_em = Zend_Registry::get('doctrine')->getEntityManager();
    }

    public function fetchOneBy($criteria, $options = null) {
        $qb = $this->_processQuery($criteria, $options);
        if (is_array($options)) {
            if (isset($options['hydrate'])) {
                return $qb->getQuery()->getOneOrNullResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            }
        }
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function fetchBy($criteria, $options = null) {
        $qb = $this->_processQuery($criteria, $options);
        if (is_array($options)) {
            if (isset($options['hydrate'])) {
                return $qb->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            }
        }
        return $qb->getQuery()->getResult();
    }

}
