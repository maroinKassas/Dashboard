<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class PlanningsController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function planningsAction()
    {
        return $this->render('@AswoDashboard/Plannings/plannings.html.twig');
    }
}
