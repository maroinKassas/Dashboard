<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class IntranetController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function intranetAction()
    {
        return $this->render('@AswoDashboard/Intranet/intranet.html.twig');
    }
}
