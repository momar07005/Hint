<?php

namespace NK\HintBundle\Repository;

/**
 * CycleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CycleRepository extends \Doctrine\ORM\EntityRepository
{
	public function obtenirListeCycles()
	{
		$qb = $this->createQueryBuilder('a')
				   ->orderBy('a.id');
		return $qb->getQuery()
				  ->getResult();
	}
}
