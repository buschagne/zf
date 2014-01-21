<?php

namespace Application\Entity\Repository;

use \Application\Entity\Repository\Base;

class PermissionRepository extends \Application\Entity\Repository\Base\BaseRepository {


    protected function _processQuery($criteria, $options) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('p, re, ro')
                ->from('Application\Entity\Permission', 'p')
                ->leftJoin('p.resource', 're')
                ->leftJoin('p.role', 'ro');

        foreach ($criteria as $column => $value) {
            if ($value == 'NULL') {
                $qb->andWhere('p.' . $column . ' IS NULL');
            } elseif ($value == 'NOT NULL') {
                $qb->andWhere('p.' . $column . ' IS NOT NULL');
            } else {
                $qb->andWhere('p.' . $column . ' = :' . $column)
                        ->setParameter($column, $value);
            }
        }

        return $qb;
    }
    
    public function fetchPermissionsByRole($roleId, $options) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('p, ro, re')
                ->from('Application\Entity\Permission', 'p')
                ->leftJoin('p.role', 'ro')
                ->leftJoin('p.resource', 're')
                ->where('ro.id = :roleId')
                ->setParameter('roleId', $roleId);
        
        if (is_array($options)) {
            if (isset($options['hydrate'])) {
                return $qb->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            }
        }
        return $qb->getQuery()->getResult();
        
    }
    public function fetchPermissionsByResource($resourceId, $options) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('p, ro, re')
                ->from('Application\Entity\Permission', 'p')
                ->leftJoin('p.role', 'ro')
                ->leftJoin('p.resource', 're')
                ->where('re.id = :resourceId')
                ->setParameter('resourceId', $resourceId);
        
        if (is_array($options)) {
            if (isset($options['hydrate'])) {
                return $qb->getQuery()->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
            }
        }
        return $qb->getQuery()->getResult();
        
    }

}
