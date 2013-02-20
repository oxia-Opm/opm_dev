<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\demande_congeRepository")
 */
class demande_conge
{

   /**
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $demande_id;
  
  /**
   * @ORM\ManyToOne(targetEntity="users")
   * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id", nullable=false)
   * @Assert\NotBlank()
   */
  private $user_id;

  /**
   * @ORM\Column(type="integer" , nullable=false)
   * @Assert\NotBlank()
   */
  private $type_id;
  
  /**
   * @ORM\Column(type="datetime" , nullable=false)
   * @Assert\NotBlank()
   */
  private $date_creation;
  
  /**
   * @ORM\Column(type="datetime" , nullable=false)
   * @Assert\NotBlank()
   */
  private $date_debut;
  
  /**
   * @ORM\Column(type="datetime" , nullable=false)
   * @Assert\NotBlank()
   */
  private $date_fin;
  
  /**
   * @ORM\Column(type="float", nullable=false)
   * @Assert\NotBlank()
   */
  private $duree;
  
   /**
   * @ORM\Column(type="string", length=30 nullable=true)
   * @Assert\Blank()
   */
  private $cree_par;
  
  /**
   * @ORM\Column(type="string", length=30 nullable=true)
   * @Assert\Blank()
   */
  private $manager;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $ba_id;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $bu_id;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $centre_id;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $societe_id;
  
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $valide;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $controle;
  
}