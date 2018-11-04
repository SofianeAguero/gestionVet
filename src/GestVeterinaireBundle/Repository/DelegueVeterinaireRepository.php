<?php

namespace GestVeterinaireBundle\Repository;

/**
 * DelegueVeterinaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DelegueVeterinaireRepository extends \Doctrine\ORM\EntityRepository
{
	 public function idDelegue($leDelegue)
    {
        $qb=$this->createQueryBuilder('p');
        $qb->where('p.mailDelegue =:mailDelegue');
        $qb->setParameter('mailDelegue', $leDelegue);
        return $qb->getQuery()->getResult();
    }
}
