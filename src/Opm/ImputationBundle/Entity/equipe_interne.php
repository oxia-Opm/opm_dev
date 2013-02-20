<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\equipe_interneRepository")
 */
class equipe_interne
{

  /**
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $user_id;

  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $fonction_id;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $systeme_id;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $phases_id;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $profil_id;
  
   /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $aut_liv_patch;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $prep_liv_interne ;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $prep_liv_externe;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $visible_req ;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $gest_taches;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $production;
  
  /**
   * @ORM\Column(type="integer" , nullable=true)
   * @Assert\Blank()
   */
  private $charge_decl;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $charge_valid;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $charge_prefac;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $gest_severite;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $article_id;
  
  /**
   * @ORM\Column(type="string", length=250 nullable=true)
   * @Assert\Blank()
   */
  private $desc_prefacture; 
  
   /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $depart;
  
}