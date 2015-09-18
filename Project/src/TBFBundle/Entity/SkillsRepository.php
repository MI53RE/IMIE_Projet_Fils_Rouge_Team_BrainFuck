<?php

namespace TBFBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SkillsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SkillsRepository extends EntityRepository
{
    public function getSkills() {
        return $this->createQueryBuilder('s')
            ->getQuery()
            ->getResult();
    }

    public function getSkillsById($id) {
        return $this->createQueryBuilder('s')
            ->where('s.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getSingleResult();
    }

}