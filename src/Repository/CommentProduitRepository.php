<?php

namespace App\Repository;

use App\Entity\CommentProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CommentProduitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CommentProduit::class);
    }

    public function commentaires($produit): array
    {
        $qb= $this->createQueryBuilder('c')
            ->where('c.sous IS NULL and c.produit= :produit')
            ->setParameter('produit', $produit)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
        ;

        return $qb->execute();
    }

    public function commentairesSous($produit, $sous): array
    {
        $qb= $this->createQueryBuilder('c')
            ->where('c.sous = :sous and c.produit= :produit')
            ->setParameter('sous', $sous)
            ->setParameter('produit', $produit)
            ->orderBy('c.id', 'ASC')
            ->getQuery()
        ;

        return $qb->execute();
    }
}
