<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    /**
     * @param $nom
     * @return Produit[]
     */
    public function rechercheNom($nom): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
            ->select('p.image as image, p.nom as nom, p.slug as slug, SUBSTRING(p.description, 1, 100) as description')
            ->andWhere('p.nom like :nom')
            ->setParameter('nom', "%".$nom."%")
            ->orderBy('p.nom', 'ASC')
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }

    /**
     * @param $slug
     * @return Produit[]
     */
    public function rechercheSlug($slug): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.slug like :slug')
            ->setParameter('slug', $slug)
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }



    /**
     * @param $slug
     * @return Produit[]
     */
    public function produitsCategorie($categorie): array
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p.image as image, p.nom as nom, p.slug as slug, SUBSTRING(p.description, 1, 100) as description')
            ->andWhere('p.categorie= :categorie')
            ->setParameter('categorie', $categorie)
            ->orderBy('p.nom', 'ASC')
            ->getQuery();

        return $qb->execute();
    }




    public function rechercheSlug1($slug): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
            ->innerJoin('p.categorie', 'c')
            ->addSelect('c')
            ->andWhere('p.slug like :slug')
            ->setParameter('slug', $slug)
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }

    /**
     * @return Produit[]
     */
    public function getCarousel(): array
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.importance > 0')
            ->orderBy('p.importance', 'DESC')
            ->getQuery();

        return $qb->execute();

        // to get just one result:
        // $product = $qb->setMaxResults(1)->getOneOrNullResult();
    }



    public function supprProduit($id)
    {
        $em = $this->getEntityManager();

        $query = $em->createQuery(
            'DELETE
        FROM App\Entity\Produit p
        WHERE p.id = :id'
        )->setParameter('id', $id);

        // returns an array of Product objects
        return $query->execute();
    }
}
