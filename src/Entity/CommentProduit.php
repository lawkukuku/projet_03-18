<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentProduitRepository")
 */
class CommentProduit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $contenue;

    /**
     * @ORM\Column(type="integer", nullable= true)
     */
    private $sous;

    /**
     * @ORM\Column(type="date", nullable= true)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="commentsp")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="commentsp")
     * @ORM\JoinColumn(nullable=true)
     */
    private $produit;

    /**
     * @return mixed
     */
    public function getContenue()
    {
        return $this->contenue;
    }

    /**
     * @param mixed $contenue
     */
    public function setContenue($contenue): void
    {
        $this->contenue = $contenue;
    }

    /**
     * @return mixed
     */
    public function getSous()
    {
        return $this->sous;
    }

    /**
     * @param mixed $sous
     */
    public function setSous($sous): void
    {
        $this->sous = $sous;
    }


    public function getUser(): User
    {
        return $this->user;
    }


    public function setUser(User $user)
    {
        $this->user = $user;
    }


    public function getProduit(): Produit
    {
        return $this->produit;
    }


    public function setProduit(Produit $produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date->format('d-m-Y');
    }

    /**
     * @param mixed $date
     */
    public function setDate(): void
    {
        $this->date = new DateTime("now");
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
