<?php

namespace Application\Entity\Repository;

use \Application\Entity\Repository\Base;

class RoleRepository extends \Application\Entity\Repository\Base\BaseRepository {

    public function datatables($params) {
        $qb = $this->_em->createQueryBuilder();
        $columns = array("r.name", "uc.login", "r.dCreate");
        
        $qb->select('r.name, uc.login as uCreate, uu.login as uUpdate, r.dCreate, r.dUpdate, r.id')
                ->from("Application\Entity\Role", "r")
                ->leftJoin("r.uCreate", 'uc')
                ->leftJoin("r.uUpdate", 'uu')
                ->where($qb->expr()->isNull('r.dDelete'));
        $datatables = new \App_Datatables();
        return $datatables->fetch($qb, $columns, "Application\Entity\Role", 'r', $params);
    }

    protected function _processQuery($criteria, $options) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('r')
                ->from('Application\Entity\Role', 'r');

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

}
