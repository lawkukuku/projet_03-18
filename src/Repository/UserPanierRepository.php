<?php

namespace App\Repository;

use App\Entity\UserPanier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class UserPanierRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserPanier::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('u')
            ->where('u.something = :value')->setParameter('value', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function verifUserPanier($produit, $panier): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('u')
            ->andWhere('u.produit = :produit and u.panier = :panier')
            ->setParameter('produit', $produit)
            ->setParameter('panier', $panier)
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }




    public function pagePanier($user): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('u')
            ->innerJoin('u.panier', 'pa')
            ->innerJoin('u.produit', 'pr')
            ->addSelect('pr')
            ->andWhere('pa.user = :user and pa.disp = true')
            ->setParameter('user', $user)
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }

    public function derniereFacture($user, $id): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('u')
            ->innerJoin('u.panier', 'pa')
            ->addSelect('pa')
            ->innerJoin('u.produit', 'pr')
            ->addSelect('pr')
            ->andWhere('pa.user = :user and pa.disp = false and pa.id= :id')
            ->setParameter('user', $user)
            ->setParameter('id', $id)
            ->orderBy('pa.id', 'DESC')
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }

    public function moinsProduit($user, $panier): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('u')
            ->innerJoin('u.panier', 'pa')
            ->addSelect('pa')
            ->innerJoin('u.produit', 'pr')
            ->addSelect('pr')
            ->andWhere('pa.user = :user and u.panier= :panier')
            ->setParameter('user', $user)
            ->setParameter('panier', $panier)
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }
}
