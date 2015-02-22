<?php

namespace BepsElectionBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Collections\Criteria ;
/**
 * ElectionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ElectionRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('description' => 'ASC'));
    }
    
    public function findAllParents()
    {
        $criteria = new Criteria();
        $criteria->where($criteria->expr()->eq("parent",null));
        return $this->matching($criteria); 
    }
    
}
