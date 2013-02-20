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
   * @ORM\Column(type="datetime")
   * @Assert\Blank()
   */
  private $date_soumission;
  
   /**
   * @ORM\Column(type="datetime")
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
  
   /**
   * @ORM\Column(type="text", nullable=true)
   * @Assert\Blank()
   */
  private $note;
  
  /**
   * @ORM\ManyToOne(targetEntity="users")
   * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id", nullable=true)
   * @Assert\Blank()
   */
  private $users_id;
  
   /**
   * @ORM\ManyToOne(targetEntity="syst_phase")
   * @ORM\JoinColumn(name="phase_id", referencedColumnName="phase_id", nullable=false)
   * @Assert\NotBlank()
   */
  private $phase_id;
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $atachee;
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $visible_client;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $suivi_projet_id;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $etape_id;
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $tache;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $effort_consomme;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $effort_estime;
  
   /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $effort_facturable;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $raf;

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
