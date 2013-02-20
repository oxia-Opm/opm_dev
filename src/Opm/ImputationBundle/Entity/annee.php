<?php

namespace Opm\ImputationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Opm\ImputationBundle\Entity\anneeRepository")
 */
class annee
{

  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   */
  private $annee;
}