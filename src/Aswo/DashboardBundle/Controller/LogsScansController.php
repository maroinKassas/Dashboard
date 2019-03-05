<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class LogsScansController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function logsScansAction()
    {
        return $this->render('@AswoDashboard/LogsScans/logsScans.html.twig');
    }
}
