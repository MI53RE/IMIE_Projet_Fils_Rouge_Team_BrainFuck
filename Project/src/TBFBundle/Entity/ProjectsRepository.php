<?php

namespace TBFBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProjectsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectsRepository extends EntityRepository
{
	public function getProjects(){
		return $this->createQueryBuilder('p')
					->leftJoin('p.members','usersProjects')
					->leftJoin('usersProjects.projects','members')
					->getQuery()
					->getResult();
	}

	public function getProjectById($id){
		return $this->createQueryBuilder('p')
					->leftJoin('p.members','usersProjects')
					->leftJoin('usersProjects.projects','members')
					->leftJoin('p.requiredSkills','projectsSkills')
					->where('p.id = :id')
					->setParameter('id', $id)
					->getQuery()
					->getResult();
	}
}