<?php

namespace Opm\TestBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\TestBundle\Entity\UsersRepository")
 */
class Users
{
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */    
    private $nom;

     /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */    
    private $prenom;
	 
     /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */    
    private $age;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(limit=6, message = "Le login doit avoir au moins {{ limit }} caractères")
     */    
    private $login;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(limit=6, message = "Le Mot de passe doit avoir au moins {{ limit }} caractères")
     */    
    private $pwd;
     
     /**
     * @ORM\ManyToOne(targetEntity="Grades")
     * @Assert\NotBlank()
     */  
    
    private $Fonction;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set age
     *
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }

    /**
     * Get pwd
     *
     * @return string 
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set Fonction
     *
     * @param Opm\TestBundle\Entity\Grades $fonction
     */
    public function setFonction(\Opm\TestBundle\Entity\Grades $fonction)
    {
        $this->Fonction = $fonction;
    }

    /**
     * Get Fonction
     *
     * @return Opm\TestBundle\Entity\Grades 
     */
    public function getFonction()
    {
        return $this->Fonction;
    }
}