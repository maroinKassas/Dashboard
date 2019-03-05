<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AccueilController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function accueilAction()
    {
        return $this->render('@AswoDashboard/Accueil/accueil.html.twig');
    }
}
