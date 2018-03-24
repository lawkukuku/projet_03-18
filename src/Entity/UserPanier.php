<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserPanierRepository")
 */
class UserPanier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="produitspanier")
     * @ORM\JoinColumn(nullable=true)
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Panier", inversedBy="userpaniers")
     * @ORM\JoinColumn(nullable=true)
     */
    private $panier;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $prix;

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite): void
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getProduit(): Produit
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit(Produit $produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return mixed
     */
    public function getPanier(): Panier
    {
        return $this->panier;
    }

    /**
     * @param mixed $panier
     */
    public function setPanier(Panier $panier)
    {
        $this->panier = $panier;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }




}
