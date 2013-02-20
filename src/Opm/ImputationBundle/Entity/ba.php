<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\baRepository")
 */
class ba
{

  /**
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $ba_id;

  /**
   * @ORM\Column(type="string", length=100)
   * @Assert\NotBlank()
   */
  private $description;

  /**
   * @ORM\Column(type="string", length=8)
   * @Assert\NotBlank()
   */
  private $abreviation;

  /**
   * @ORM\Column(type="string", length=30, nullable=true)
   * @Assert\Blank()
  */
  private $directeur_id;


    /**
     * Get ba_id
     *
     * @return integer 
     */
    public function getBaId()
    {
        return $this->ba_id;
    }

    /**
     * Set description
     * 
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set abreviation
     *
     * @param string $abreviation
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;
    }

    /**
     * Get abreviation
     *
     * @return string 
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Set directeur_id
     *
     * @param string $directeurId
     */
    public function setDirecteurId($directeurId)
    {
        $this->directeur_id = $directeurId;
    }

    /**
     * Get directeur_id
     *
     * @return string 
     */
    public function getDirecteurId()
    {
        return $this->directeur_id;
    }
}