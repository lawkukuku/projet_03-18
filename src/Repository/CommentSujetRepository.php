<?php

namespace App\Repository;

use App\Entity\CommentSujet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CommentSujetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CommentSujet::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function commentaires($sujet): array
    {
        $qb= $this->createQueryBuilder('c')
            ->where('c.sous IS NULL and c.sujet= :sujet')
            ->setParameter('sujet', $sujet)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ;

        return $qb->execute();
    }

    public function commentairesSous($sujet, $sous): array
    {
        $qb= $this->createQueryBuilder('c')
            ->where('c.sous = :sous and c.sujet= :sujet')
            ->setParameter('sous', $sous)
            ->setParameter('sujet', $sujet)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
        ;

        return $qb->execute();
    }
}
