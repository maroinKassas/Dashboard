<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class GestionReseauController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function gestionReseauAction()
    {
        return $this->render('@AswoDashboard/GestionReseau/gestionReseau.html.twig');
    }
}
