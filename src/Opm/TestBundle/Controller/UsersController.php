<?php

namespace Opm\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Opm\TestBundle\Entity\Users;

/**
 * Users controller.
 *
 * @Route("/users")
 */
class UsersController extends Controller
{
    /**
     * Lists all Users entities.
     *
     * @Route("/", name="users")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('OpmTestBundle:Users')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Users entity.
     *
     * @Route("/{id}/show", name="users_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('OpmTestBundle:Users')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Users entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }

}
