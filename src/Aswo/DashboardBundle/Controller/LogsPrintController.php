<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class LogsPrintController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function logsPrintAction()
    {
        return $this->render('@AswoDashboard/LogsPrint/logsPrint.html.twig');
    }
}
