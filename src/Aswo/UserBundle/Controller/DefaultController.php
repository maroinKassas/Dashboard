<?php

namespace Aswo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
  public function loginAction(Request $request)
  {

    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('aswo_dashboard_homepage');
    }
    
    $authenticationUtils = $this->get('security.authentication_utils');
    
    return $this->render('@AswoUserBundle/Default/index.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }
}