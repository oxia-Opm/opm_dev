<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\centresRepository")
 */
class centres
{

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $centre_id;

  /**
   * @ORM\Column(type="string", length=100)
   * @Assert\NotBlank()
   */
  private $libelle_centre;

  /**
   * @ORM\Column(type="string", length=8)
   * @Assert\NotBlank()
   */
  private $abreviation_prod;

  /**
   * @ORM\Column(type="string", length=30, nullable=true)
   * @Assert\Blank()
   */
  private $manager;

  /**
   * @ORM\ManyToOne(targetEntity="bu")
   * @ORM\JoinColumn(name="bu_id", referencedColumnName="bu_id", nullable=false)
   * @Assert\NotBlank()
   */
  private $bu_id;

  /**
   * Get centre_id
   *
   * @return integer 
   */
  public function getCentreId()
  {
    return $this->centre_id;
  }

  /**
   * Set libelle_centre
   *
   * @param string $libelleCentre
   */
  public function setLibelleCentre($libelleCentre)
  {
    $this->libelle_centre = $libelleCentre;
  }

  /**
   * Get libelle_centre
   *
   * @return string 
   */
  public function getLibelleCentre()
  {
    return $this->libelle_centre;
  }

  /**
   * Set abreviation_prod
   *
   * @param string $abreviationProd
   */
  public function setAbreviationProd($abreviationProd)
  {
    $this->abreviation_prod = $abreviationProd;
  }

  /**
   * Get abreviation_prod
   *
   * @return string 
   */
  public function getAbreviationProd()
  {
    return $this->abreviation_prod;
  }

  /**
   * Set manager
   *
   * @param string $manager
   */
  public function setManager($manager)
  {
    $this->manager = $manager;
  }

  /**
   * Get manager
   *
   * @return string 
   */
  public function getManager()
  {
    return $this->manager;
  }

  /**
   * Set bu_id
   *
   * @param Opm\ImputationBundle\Entity\ba $buId
   */
  public function setBuId(\Opm\ImputationBundle\Entity\ba $buId)
  {
    $this->bu_id = $buId;
  }

  /**
   * Get bu_id
   *
   * @return Opm\ImputationBundle\Entity\ba 
   */
  public function getBuId()
  {
    return $this->bu_id;
  }

  /**
   * Set centre_id
   *
   * @param integer $centreId
   */
  public function setCentreId($centreId)
  {
    $this->centre_id = $centreId;
  }

}