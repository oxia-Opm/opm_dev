<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\buRepository")
 */
class bu
{

  /**
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $bu_id;

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
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $tjm;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $prm;

  /**
   * @ORM\Column(type="string", length=30, nullable=true)
   * @Assert\Blank()
   */
  private $directeur_id;

  /**
   * @ORM\ManyToOne(targetEntity="ba")
   * @ORM\JoinColumn(name="ba_id", referencedColumnName="ba_id", nullable=false)
   * @Assert\NotBlank()
   */
  private $ba_id;


    /**
     * Get bu_id
     *
     * @return integer 
     */
    public function getBuId()
    {
        return $this->bu_id;
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
     * Set tjm
     *
     * @param integer $tjm
     */
    public function setTjm($tjm)
    {
        $this->tjm = $tjm;
    }

    /**
     * Get tjm
     *
     * @return integer 
     */
    public function getTjm()
    {
        return $this->tjm;
    }

    /**
     * Set prm
     *
     * @param integer $prm
     */
    public function setPrm($prm)
    {
        $this->prm = $prm;
    }

    /**
     * Get prm
     *
     * @return integer 
     */
    public function getPrm()
    {
        return $this->prm;
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

    /**
     * Set ba_id
     *
     * @param Opm\ImputationBundle\Entity\ba $baId
     */
    public function setBaId(\Opm\ImputationBundle\Entity\ba $baId)
    {
        $this->ba_id = $baId;
    }

    /**
     * Get ba_id
     *
     * @return Opm\ImputationBundle\Entity\ba 
     */
    public function getBaId()
    {
        return $this->ba_id;
    }
}