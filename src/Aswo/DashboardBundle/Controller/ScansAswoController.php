<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ScansAswoController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function scansAswoAction()
    {
        return $this->render('@AswoDashboard/ScansAswo/scansAswo.html.twig');
    }
}
