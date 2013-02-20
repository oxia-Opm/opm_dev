<?php

namespace Opm\TestBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Opm\TestBundle\Form\UsersType;
use Opm\TestBundle\Entity\Users;
use Opm\TestBundle\Entity\Grades;


class TestController extends ContainerAware {

  /**
   * action d'index test Controller
   * @return template
   * @author Haithem benammar
   */
  public function indexAction($page = 1, $id = "") {

    $em = $this->container->get('doctrine')->getEntityManager();
    $request = $this->container->get('request');
    $aSort = array();
    /*$oGrade=new Grades();
    $oGrade->setLabel("Manager");
    
       $em->persist($oGrade);
        $em->flush();*/
    //initialisation des variable dans le cas du ajax
    if ($request->isXmlHttpRequest()) {
      $page = $request->request->get('page');
      //// si on veux trier la list /////
      if ($request->request->get('varSort') != '') {
        if ($request->request->get('sensSort') == "true") {
          $sensSort = "desc";
        } else {
          $sensSort = "asc";
        }
        $aSort = array($request->request->get('varSort') => $sensSort);
      }
    }
    $sMessage = "";
    //1- drop user
    if ($id != null) {
      $sMessage = "Suppression d'un utilisateur avec succès";
      $oUser = $em->find("OpmTestBundle:Users", $id);
      $em->remove($oUser);
      $em->flush();
    }
    //2- List of users
    // On récupère le repository
    $repository = $this->container->get('doctrine')
            ->getEntityManager()
            ->getRepository('OpmTestBundle:Users');


    // On récupère le nombre total de user
    $nb_users = $repository->getTotal();
    // On définit le nombre d'users par page
    // (pour l'instant en dur dans le contrôleur, mais par la suite on le transformera en paramètre du bundle)
    $nb_users_page = 5;

    // On calcule le nombre total de pages
    $nb_pages = ceil($nb_users / $nb_users_page);

    // On va récupérer les articles à partir du N-ième user :
    $offset = ($page - 1) * $nb_users_page;

    // Ici on a changé la condition pour déclencher une erreur 404
    // lorsque la page est inférieur à 1 ou supérieur au nombre max.
    if ($page < 1 OR $page > $nb_pages) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    // On récupère les articles qu'il faut grâce à findBy() :
    $users = $repository->findBy(
            array(), // Pas de critère
            $aSort, // On tri variable
            $nb_users_page, // On sélectionne $nb_articles_page articles
            $offset                  // A partir du $offset ième
    );

    if ($request->isXmlHttpRequest()) {
      return $this->container->get('templating')->renderResponse('OpmTestBundle:Test:_liste.html.twig', array('users' => $users,
                  'page' => $page, // On transmet à la vue la page courante,
                  'nb_pages' => $nb_pages, // Et le nombre total de pages.
                  'message' => $sMessage));
    }
    
    return $this->container->get('templating')->renderResponse('OpmTestBundle:Test:index.html.twig', array('users' => $users,
                'page' => $page, // On transmet à la vue la page courante,
                'nb_pages' => $nb_pages, // Et le nombre total de pages.
                'message' => $sMessage));
  }

  /**
   * action ajout test Controller
   * @return template
   * @author Haithem benammar
   */
  public function ajoutAction() {
    $oUser = new Users();
    $oForm = $this->container->get('form.factory')->create(new UsersType(), $oUser);
    $sMessage = "";
    $request = $this->container->get('request');

    if ($request->getMethod() == 'POST') {

      $oForm->bindRequest($request);
      if ($oForm->isValid()) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $oUser->setPwd(md5($oUser->getPwd()));
        $em->persist($oUser);
        $em->flush();
  
      }
    }
    return $this->container->get('templating')->renderResponse('OpmTestBundle:Test:ajout.html.twig', array('form' => $oForm->createView(), 'message' => $sMessage));
  }

  /**
   * amodifier d'index test Controller
   * @param int $id id user
   * @return template
   * @author Haithem benammar
   */
  public function modifAction($id) {

    $em = $this->container->get('doctrine')->getEntityManager();
    $oUser = $em->find("OpmTestBundle:Users", $id);
    $oForm = $this->container->get('form.factory')->create(new UsersType(), $oUser);
    $sMessage = "";
    $request = $this->container->get('request');

    if ($request->getMethod() == 'POST') {

      $oForm->bindRequest($request);
      if ($oForm->isValid()) {
        $oUser->setPwd(md5($oUser->getPwd()));
        $em->persist($oUser);
        $em->flush();
      }
    }

    return $this->container->get('templating')->renderResponse('OpmTestBundle:Test:ajout.html.twig', array('form' => $oForm->createView(), 'message' => $sMessage));
  }

  /**
   * function de changement du langue
   * @param string abreviation langue
   * @return page en coure
   * @author Haithem benammar
   */
  public function traductionAction($langue = null) {
    if ($langue != null) {
      // On enregistre la langue en session
      $this->container->get('session')->setLocale($langue);
    }

    // on rediriger vers la page d'origine
    $url = $this->container->get('request')->headers->get('referer');
    if (empty($url)) {
      $url = $this->container->get('router')->generate('myapp_accueil');
    }
    return new RedirectResponse($url);
  }

}
