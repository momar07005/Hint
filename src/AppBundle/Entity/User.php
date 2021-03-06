<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="prenom", type="string", length=255)
     *
     * @Assert\NotBlank(message="Veuillez entrer votre prénom.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Le prénom est trop petit.",
     *     maxMessage="Le prénom est trop grand.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $prenom;

     /**
     * @ORM\Column(name="nom", type="string", length=255)
     *
     * @Assert\NotBlank(message="Veuillez entrer votre nom.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Le nom est trop petit.",
     *     maxMessage="Le nom est trop grand.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nom;

    /**
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     */
    private $facebookID;

    private $facebookAccessToken;

    /**
     * @ORM\Column(name="google_id", type="string", length=255, nullable=true)
     */
    private $googleID;

    private $googleAccessToken;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    /**
     * @param string $facebookId
     * @return User
     */
    public function setFacebookID($facebookID)
    {
        $this->facebookID = $facebookID;

        return $this;
    }

    /**
     * @return string
     */
    public function getFacebookID()
    {
        return $this->facebookID;
    }

    /**
     * @param string $facebookAccessToken
     * @return User
     */
    public function setFacebookAccessToken($facebookAccessToken)
    {
        $this->facebookAccessToken = $facebookAccessToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getFacebookAccessToken()
    {
        return $this->facebookAccessToken;
    }

    
    /**
     * @param string $googleId
     * @return User
     */
    public function setGoogleID($googleID)
    {
        $this->googleID = $googleID;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleID()
    {
        return $this->facebookID;
    }

    /**
     * @param string $googleAccessToken
     * @return User
     */
    public function setGoogleAccessToken($googleAccessToken)
    {
        $this->googleAccessToken = $googleAccessToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleAccessToken()
    {
        return $this->googleAccessToken;
    }
}