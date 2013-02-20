<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\jours_feriesRepository")
 */
class jours_feries
{

  /**
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $jour_id;

  /**
   * @ORM\Column(type="string", length=50)
   * @Assert\Blank()
   */
  private $description;

  /**
   * @ORM\Column(type="datetime", nullable=false)
   * @Assert\NotBlank()
   */
  private $date_jour;

  /**
   * @ORM\Column(type="integer")
   * @Assert\Blank()
   */
  private $nombre_jour;
  
  /**
   * @ORM\ManyToOne(targetEntity="annee")
   * @ORM\JoinColumn(name="annee", referencedColumnName="annee", nullable=false)
   * @Assert\NotBlank()
   */
  private $annee;

}