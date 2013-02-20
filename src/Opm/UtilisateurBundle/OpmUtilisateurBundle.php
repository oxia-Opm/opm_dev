<?php
namespace Opm\UtilisateurBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class OpmUtilisateurBundle extends Bundle
{
  public function getParent()
    {
        return 'FOSUserBundle';
    }
}
