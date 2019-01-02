<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function indexAction()
    {
        return $this->render('@AswoDashboard/Default/accueil.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function accueilAction()
    {
        return $this->render('@AswoDashboard/Default/accueil.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function intranetAction()
    {
        return $this->render('@AswoDashboard/Default/intranet.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function serveursAction()
    {
        return $this->render('@AswoDashboard/Default/serveurs.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function inventaireAction()
    {
        return $this->render('@AswoDashboard/Default/inventaire.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function logsscansAction()
    {
        return $this->render('@AswoDashboard/Default/logsscans.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function logsprintAction()
    {
        return $this->render('@AswoDashboard/Default/logsprint.html.twig');
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function utilisateursAction()
    {
        return $this->render('@AswoDashboard/Default/utilisateurs.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function planningsAction()
    {
        return $this->render('@AswoDashboard/Default/plannings.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function informationsAction()
    {
        return $this->render('@AswoDashboard/Default/informations.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function gestionreseauAction()
    {
        return $this->render('@AswoDashboard/Default/gestionreseau.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function scansaswoAction()
    {
        return $this->render('@AswoDashboard/Default/scansaswo.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function profilAction()
    {
        return $this->render('@AswoDashboard/Default/profil.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function settingsAction()
    {
        return $this->render('@AswoDashboard/Default/settings.html.twig');
    }
}
