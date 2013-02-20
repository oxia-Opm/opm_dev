<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\action_projetRepository")
 */
class action_projet
{

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $action_id;
  
  /**
   * @ORM\Column(type="string", length=250)
   * @Assert\Blank()
   */
  private $description;
  
  /**
   * @ORM\Column(type="string", length=30)
   * @Assert\Blank()
   */
  private $affectee_a;
  
  /**
   * @ORM\Column(type="date")
   * @Assert\Blank()
   */
  private $date_soumission;
  
   /**
   * @ORM\Column(type="date")
   * @Assert\Blank()
   */
  private $due_le;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $statut_id;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\NotBlank()
   */
  private $systeme_id;
  
   /**
   * @ORM\ManyToOne(targetEntity="requete")
   * @ORM\JoinColumn(name="requete_id", referencedColumnName="requete_id", nullable=false)
   * @Assert\NotBlank()
   */
  private $requete_id;
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $fermee;

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
