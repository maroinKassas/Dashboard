<?php

namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@AswoDashboard/Default/index.html.twig');
    }

    public function accueilAction()
    {
        return $this->render('@AswoDashboard/Default/accueil.html.twig');
    }

    public function intranetAction()
    {
        return $this->render('@AswoDashboard/Default/intranet.html.twig');
    }

    public function serveursAction()
    {
        return $this->render('@AswoDashboard/Default/serveurs.html.twig');
    }

    public function inventaireAction()
    {
        return $this->render('@AswoDashboard/Default/inventaire.html.twig');
    }

    public function logsscansAction()
    {
        return $this->render('@AswoDashboard/Default/logsscans.html.twig');
    }

    public function logsprintAction()
    {
        return $this->render('@AswoDashboard/Default/logsprint.html.twig');
    }

    public function utilisateursAction()
    {
        return $this->render('@AswoDashboard/Default/utilisateurs.html.twig');
    }

    public function planningsAction()
    {
        return $this->render('@AswoDashboard/Default/plannings.html.twig');
    }

    public function informationsAction()
    {
        return $this->render('@AswoDashboard/Default/informations.html.twig');
    }

    public function gestionreseauAction()
    {
        return $this->render('@AswoDashboard/Default/gestionreseau.html.twig');
    }

    public function scansaswoAction()
    {
        return $this->render('@AswoDashboard/Default/scansaswo.html.twig');
    }

    public function profilAction()
    {
        return $this->render('@AswoDashboard/Default/profil.html.twig');
    }

    public function settingsAction()
    {
        return $this->render('@AswoDashboard/Default/settings.html.twig');
    }
}
