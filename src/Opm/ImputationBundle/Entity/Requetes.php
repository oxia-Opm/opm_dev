<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\RequetesRepository")
 */
class Requetes
{

  /**
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $requete_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $projet_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $systeme_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $ss_systeme_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $composant_id;

  /**
   * @ORM\ManyToOne(targetEntity="req_symptomes")
   * @ORM\JoinColumn(name="symptome_id", referencedColumnName="symptome_id", nullable=true)
   */
  private $symptome_id;

  /**
   * @ORM\ManyToOne(targetEntity="req_statut")
   * @ORM\JoinColumn(name="statut_id", referencedColumnName="statut_id", nullable=true)
   */
  private $statut_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   */
  private $nature_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $phase_id;

  /**
   * @ORM\ManyToOne(targetEntity="req_severites")
   * @ORM\JoinColumn(name="severite_id", referencedColumnName="severite_id", nullable=true)
   */
  private $severite_id;

  /**
   * @ORM\ManyToOne(targetEntity="req_priorites")
   * @ORM\JoinColumn(name="priorite_id", referencedColumnName="priorite_id", nullable=true)
   */
  private $priorite_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $cause_id;

  /**
   * @ORM\Column(type="string", nullable=true, length=30)
   * @Assert\Blank()
   */
  private $sommaire;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   * @Assert\Blank()
   */
  private $visible_client;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   * @Assert\Blank()
   */
  private $accepte_client;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_ana_estime;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_reso_est;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_test_est;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_moeuvr_est;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_ana_reel;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_reso_reel;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_test_reel;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_moeuvr_reel;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $date_soumission;

  /**
   * @ORM\Column(type="date", nullable=true)
   * @Assert\Blank()
   */
  private $date_livr_souhaite;

  /**
   * @ORM\Column(type="date", nullable=true)
   * @Assert\Blank()
   */
  private $date_livr_planifie;

  /**
   * @ORM\Column(type="string", nullable=true, length=10)
   * @Assert\Blank()
   */
  private $version_prevu;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $id_duplicata;

  /**
   * @ORM\Column(type="string", nullable=true, length=4000)
   * @Assert\Blank()
   */
  private $resolution;

  /**
   * @ORM\Column(type="string", nullable=true, length=250)
   * @Assert\Blank()
   */
  private $notes;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   * @Assert\Blank()
   */
  private $responsabilite;

  /**
   * @ORM\Column(type="string", nullable=true, length=250)
   * @Assert\Blank()
   */
  private $piece_jointe;

  /**
   * @ORM\ManyToOne(targetEntity="users")
   * @ORM\JoinColumn(name="geree_par", referencedColumnName="user_id", nullable=true)
   */
  private $geree_par;

  /**
   * @ORM\ManyToOne(targetEntity="users")
   * @ORM\JoinColumn(name="affectee_a_ana", referencedColumnName="user_id", nullable=true)
   */
  private $affectee_a_ana;

  /**
   * @ORM\ManyToOne(targetEntity="users")
   * @ORM\JoinColumn(name="affectee_a_res", referencedColumnName="user_id", nullable=true)
   */
  private $affectee_a_res;

  /**
   * @ORM\ManyToOne(targetEntity="users")
   * @ORM\JoinColumn(name="testee_par", referencedColumnName="user_id", nullable=true)
   */
  private $testee_par;

  /**
   * @ORM\Column(type="string", nullable=true, length=100)
   * @Assert\Blank()
   */
  private $demandee_par;

  /**
   * @ORM\ManyToOne(targetEntity="clients")
   * @ORM\JoinColumn(name="client_id", referencedColumnName="client_id", nullable=true)
   */
  private $client_id;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   * @Assert\Blank()
   */
  private $livree_client;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   * @Assert\Blank()
   */
  private $livree_interne;

  /**
   * @ORM\Column(type="string", nullable=true, length=50)
   * @Assert\Blank()
   */
  private $champs_user;

  /**
   * @ORM\Column(type="text", nullable=true, length=50)
   * @Assert\Blank()
   */
  private $description2;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   * @Assert\Blank()
   */
  private $soumission_dif;

  /**
   * @ORM\Column(type="string", nullable=true, length=20)
   * @Assert\Blank()
   */
  private $version_actuelle;

  /**
   * @ORM\Column(type="boolean", nullable=true)
   * @Assert\Blank()
   */
  private $livpatchaut;

  /**
   * @ORM\Column(type="date", nullable=true)
   * @Assert\Blank()
   */
  private $date_differee;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $requete_parente;

  /**
   * @ORM\Column(type="date", nullable=true)
   * @Assert\Blank()
   */
  private $date_livraison_interne;

  /**
   * @ORM\Column(type="date", nullable=true)
   * @Assert\Blank()
   */
  private $date_livraison_externe;

  /**
   * @ORM\Column(type="string", nullable=true, length=10)
   * @Assert\Blank()
   */
  private $id_externe;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $attachee;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_reel;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $effort_estime;

  /**
   * @ORM\Column(type="string", nullable=true, length=10)
   * @Assert\Blank()
   */
  private $phases_id;

  /**
   * @ORM\ManyToOne(targetEntity="gp_fournisseur")
   * @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="fournisseur_id", nullable=true)
   */
  private $fournisseur_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $livraison_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $avenantr_id;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $type_amelioration;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $source_amelioration;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $pourcentage_eff;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $facture;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $raf;

  /**
   * @ORM\Column(type="date", nullable=true)
   * @Assert\Blank()
   */
  private $date_modif_raf;

  /**
   * @ORM\Column(type="string", nullable=true, length=256)
   * @Assert\Blank()
   */
  private $commentaire;

  /**
   * @ORM\Column(type="string", nullable=true, length=30)
   * @Assert\Blank()
   */
  private $maj_raf_par;

  /**
   * @ORM\Column(type="float", nullable=true)
   * @Assert\Blank()
   */
  private $effort_facturable;

  /**
   * @ORM\Column(type="string", nullable=true, length=100)
   * @Assert\Blank()
   */
  private $file1;

  /**
   * @ORM\Column(type="string", nullable=true, length=100)
   * @Assert\Blank()
   */
  private $file2;

  /**
   * @ORM\Column(type="string", nullable=true, length=100)
   * @Assert\Blank()
   */
  private $file3;

  /**
   * @ORM\Column(type="string", nullable=true, length=100)
   * @Assert\Blank()
   */
  private $file4;

  /**
   * @ORM\Column(type="string", nullable=true, length=100)
   * @Assert\Blank()
   */
  private $file5;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $pac;

  /**
   * @ORM\Column(type="string", nullable=true, length=500)
   * @Assert\Blank()
   */
  private $analyse_cause;

  /**
   * @ORM\Column(type="date", nullable=true)
   * @Assert\Blank()
   */
  private $date_deb_garantie;

  /**
   * @ORM\Column(type="date", nullable=true)
   * @Assert\Blank()
   */
  private $date_fin_garantie;

  /**
   * @ORM\ManyToOne(targetEntity="categorie_requete")
   * @ORM\JoinColumn(name="categorie_id", referencedColumnName="categorie_id", nullable=true)
   */
  private $categorie_id;

  /**
   * @ORM\Column(type="string", nullable=true, length=30)
   * @Assert\Blank()
   */
  private $genere_par;

  /**
   * @ORM\Column(type="integer", nullable=true)
   * @Assert\Blank()
   */
  private $frequence_ano;

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
