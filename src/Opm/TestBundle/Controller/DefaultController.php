<?php

namespace Opm\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpmTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
