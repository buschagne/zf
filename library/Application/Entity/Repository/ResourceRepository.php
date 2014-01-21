<?php

namespace Application\Entity\Repository;

use \Application\Entity\Repository\Base;

class ResourceRepository extends \Application\Entity\Repository\Base\BaseRepository {


    protected function _processQuery($criteria, $options) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('r')
                ->from('Application\Entity\Resource', 'r');

        foreach ($criteria as $column => $value) {
            if ($value == 'NULL') {
                $qb->andWhere('r.' . $column . ' IS NULL');
            } elseif ($value == 'NOT NULL') {
                $qb->andWhere('r.' . $column . ' IS NOT NULL');
            } else {
                $qb->andWhere('r.' . $column . ' = :' . $column)
                        ->setParameter($column, $value);
            }
        }
        return $qb;
    }
    
    public function datatables($params) {
        $qb = $this->_em->createQueryBuilder();
        $columns = array("r.name", "uc.login", "r.dCreate");
        
        $qb->select('r.name, uc.login as uCreate, uu.login as uUpdate, r.dCreate, r.dUpdate, r.id')
                ->from("Application\Entity\Resource", "r")
                ->leftJoin("r.uCreate", 'uc')
                ->leftJoin("r.uUpdate", 'uu')
                ->where($qb->expr()->isNull('r.dDelete'));
        $datatables = new \App_Datatables();
        return $datatables->fetch($qb, $columns, "Application\Entity\Resource", 'r', $params);
    }

}
