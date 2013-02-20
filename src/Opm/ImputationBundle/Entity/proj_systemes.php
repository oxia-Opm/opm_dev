<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\proj_systemesRepository")
 */
class proj_systemes
{

 /**
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $systeme_id;
  
  /**
   * @ORM\ManyToOne(targetEntity="projets")
   * @ORM\JoinColumn(name="projet_id", referencedColumnName="projet_id", nullable=true)
   * @Assert\Blank()
   */
  private $projet_id;
  
  /**
   * @ORM\ManyToOne(targetEntity="type_systeme")
   * @ORM\JoinColumn(name="type_id", referencedColumnName="type_id", nullable=true)
   * @Assert\Blank()
   */
  private $type_id;
  
  /**
   * @ORM\Column(type="string", length=250)
   * @Assert\Blank()
   */
  private $description;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $gest_strict_effort;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $synch_livraison;
  
    /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $gestion_version;
  
    /**
   * @ORM\Column(type="string", length=20, nullable=true)
   * @Assert\Blank()
   */
  private $unite_id;
  
    /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $email_notif;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $gest_taches_strict;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $gestion_requetes;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $gestion_id_exter;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $imp_requetes;
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $gestion_conf;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effortparimputation;
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $ferme;
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $def_systeme_id;
  
  /**
   * @ORM\ManyToOne(targetEntity="bu")
   * @ORM\JoinColumn(name="bu_id", referencedColumnName="bu_id", nullable=true)
   * @Assert\Blank()
   */
  private $bu_id;
  
   /**
   * @ORM\ManyToOne(targetEntity="ba")
   * @ORM\JoinColumn(name="ba_id", referencedColumnName="ba_id", nullable=true)
   * @Assert\Blank()
   */
  private $ba_id;
  
  /**
   * @ORM\ManyToOne(targetEntity="centres")
   * @ORM\JoinColumn(name="centre_id", referencedColumnName="centre_id", nullable=true)
   * @Assert\Blank()
   */
  private $centre_id;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $tache_requete;
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $interne;
  
  /**
   * @ORM\Column(type="string", length=8, nullable=true)
   * @Assert\Blank()
   */
  private $code_caai;
  
   /**
   * @ORM\Column(type="string", length=30)
   * @Assert\Blank()
   */
  private $user_id;
  
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
