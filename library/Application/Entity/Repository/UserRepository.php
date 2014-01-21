<?php

namespace Application\Entity\Repository;

use \Application\Entity\Repository\Base;

class UserRepository extends \Application\Entity\Repository\Base\BaseRepository {

    public function datatables($params) {

        $qb = $this->_em->createQueryBuilder();
        $columns = array("u.login", "CONCAT(CONCAT(u.firstName, ' '), u.lastName)", "u.email");
        
        $qb->select("u.login, CONCAT(CONCAT(u.firstName, ' '), u.lastName) AS fullName, u.email, u.id")
                ->from("Application\Entity\User", "u")
                ->where($qb->expr()->isNull('u.dDelete'));

        $datatables = new \App_Datatables();
        $result = $datatables->fetch($qb, $columns, "Application\Entity\User", 'u', $params);
        
        return $result;
    }
    
    protected function _processQuery($criteria, $options) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u, r')
                ->from('Application\Entity\User', 'u')
                ->leftJoin('u.roles', 'r');

        foreach ($criteria as $column => $value) {
            if ($value == 'NULL') {
                $qb->where('u.' . $column . ' is NULL');
            } else {
                $qb->where('u.' . $column . ' = :' . $column)
                        ->setParameter($column, $value);
            }
        }
        
        return $qb;
    }

}
