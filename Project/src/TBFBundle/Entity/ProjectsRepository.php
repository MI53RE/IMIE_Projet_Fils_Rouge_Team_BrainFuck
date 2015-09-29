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
					->leftJoin('p.skills','projectsSkills')
					->where('p.id = :id')
					->setParameter('id', $id)
					->getQuery()
					->getResult();
	}
        
        
        // vincent
        public function getProjectByName($name){
        try {
            $qb = $this->createQueryBuilder('p');
            return $qb      //->leftJoin('p.members', 'usrid')
                            //->addSelect('usrid')
                            //->leftJoin('p.skills', 'skillid')
                            //->addSelect('skillid')
                            ->where($qb->expr()->like('p.name', ':name'))
                            ->setParameter('name', '%' . $name . '%')
                            ->getQuery()
                            ->getResult();
        } catch (\Doctrine\DBAL\DBALException $e) {
            //echo $e->getTraceAsString();
        }
    }
}
