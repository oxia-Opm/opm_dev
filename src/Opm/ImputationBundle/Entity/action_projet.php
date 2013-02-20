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

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
