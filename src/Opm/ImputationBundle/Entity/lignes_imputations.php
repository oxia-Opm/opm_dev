<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\lignes_imputationsRepository")
 */
class lignes_imputations
{

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $ligne_imp_id;
  
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="imputation_temps")
   * @ORM\JoinColumn(name="fiche_id", referencedColumnName="fiche_id", nullable=false)
   * @Assert\NotBlank()
   */
  private $fiche_id;
  
  /**
   * @ORM\Column(type="integer", nullable=false)
   * @Assert\NotBlank()
   */
  private $tache_id;
  
   /**
   * @ORM\Column(type="integer", nullable=false)
   * @Assert\NotBlank()
   */
  private $systeme_id;
  
  /**
   * @ORM\Column(type="integer", nullable=false)
   * @Assert\NotBlank()
   */
  private $phase_id;
  
   /**
   * @ORM\Column(type="string", length=10, nullable=true)
   * @Assert\Blank()
   */
  private $phases_id;
  
  /**
   * @ORM\Column(type="text", nullable=true)
   * @Assert\Blank()
   */
  private $commentaires;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_lundi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_mardi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_mercredi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_jeudi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_vendredi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_samedi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_dimanche;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $total_tpv;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_lundiprev;
  
   /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_mardiprev;
  
   /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_mercrediprev;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_jeudiprev;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_vendrediprev;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_samediprev;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_dimancheprev;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $cprevsem;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $rafprevsem;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $rafsem;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $bfsem;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $bcsmoinun;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $rafsmoinun;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $bfisem;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $bfisemprev;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $bstocksem;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $ic_lundi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $ic_mardi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $ic_mercredi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $ic_jeudi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $ic_vendredi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $ic_samedi;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $ic_dimanche;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_lundi_locale;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_mardi_locale;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_mercredi_locale;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_jeudi_locale;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_vendredi_locale;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_samedi_locale;
  
  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $imp_dimanche_locale;
  
  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $client_id; 
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
