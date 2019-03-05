<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ServeursController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function serveursAction()
    {
        return $this->render('@AswoDashboard/Serveurs/serveurs.html.twig');
    }
}
