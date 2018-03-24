<?php

namespace App\Repository;

use App\Entity\Sujet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class SujetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Sujet::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('s')
            ->where('s.something = :value')->setParameter('value', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function sujet($user): array
    {
        $qb= $this->createQueryBuilder('s')
            ->where('s.user = :user AND s.titre like :titre AND s.description like :description')
            ->setParameter('user', $user)
            ->setParameter('titre', "n")
            ->setParameter('description', "n")
            ->orderBy('s.id', 'ASC')
            ->getQuery();

        return $qb->execute();
    }
}
