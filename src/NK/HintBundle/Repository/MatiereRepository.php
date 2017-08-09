<?php

namespace NK\HintBundle\Repository;

/**
 * MatiereRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MatiereRepository extends \Doctrine\ORM\EntityRepository
{
	public function obtenirListeMatieres($idNiveau)
	{
		$qb = $this->createQueryBuilder('a')
				->Join('a.niveau','b', 'WITH', 'b.id ='.$idNiveau)
				->addSelect('b');
		return $qb->getQuery()
				->getResult();
	}
}
