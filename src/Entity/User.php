<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email deja pris")
 * @UniqueEntity(fields="username", message="Identifiant deja pris")
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $roles;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Panier", mappedBy="user")
     */
    private $paniers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Sujet", mappedBy="user")
     */
    private $sujets;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommentSujet", mappedBy="user")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CommentProduit", mappedBy="user")
     */
    private $commentsp;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Image
     */
    private $image;

    public function __construct()
    {
        $this->isActive = true;
        $this->roles= 'ROLE_USER';
        $this->products = new ArrayCollection();
        $this->sujets = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->commentsp = new ArrayCollection();
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return array($this->roles);
    }

    public function eraseCredentials()
    {
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }


    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
        ));
    }
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
            ) = unserialize($serialized);
    }




    public function getEmail()
    {
        return $this->email;
    }




    /**
     * @return Collection|Panier[]
     */
    public function getPaniers()
    {
        return $this->paniers;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Collection|Sujet[]
     */
    public function getSujets()
    {
        return $this->sujets;
    }

    /**
     * @return Collection|CommentSujet[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return Collection|CommentProduit[]
     */
    public function getCommentsp()
    {
        return $this->commentsp;
    }

    public function getImage()
    {
        return $this->image;
    }



    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }






}