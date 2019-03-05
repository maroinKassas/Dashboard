<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class InventaireController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function inventaireAction()
    {
        return $this->render('@AswoDashboard/Inventaire/inventaire.html.twig');
    }
}
