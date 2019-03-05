<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class InformationsController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function informationsAction()
    {
        return $this->render('@AswoDashboard/Informations/informations.html.twig');
    }
}
