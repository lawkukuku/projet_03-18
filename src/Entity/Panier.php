<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disp;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="paniers")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;

    /**
     * @ORM\Column(type="date", nullable= true)
     */
    private $date;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserPanier", mappedBy="panier")
     */
    private $userpaniers;

    /**
     * @ORM\Column(type="string")
     */
    private $slug;

    /**
     * Panier constructor.
     */
    public function __construct()
    {
        $this->userpaniers = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getDisp()
    {
        return $this->disp;
    }

    /**
     * @param mixed $disp
     */
    public function setDisp($disp): void
    {
        $this->disp = $disp;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate(): void
    {
        $this->date = new DateTime("now");
    }



    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return Collection|UserPanier[]
     */
    public function getUserpaniers()
    {
        return $this->userpaniers;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }





}
