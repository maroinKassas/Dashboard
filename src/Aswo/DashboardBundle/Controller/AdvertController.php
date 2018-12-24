<?php
namespace Aswo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AdvertController extends Controller
{
    //@Security("has_role('ROLE_USER')")
    public function addAction(Request $request)
    {
        /*if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            throw new AccessDeniedException('Accès limité aux utilisateurs.');
        }*/
    }
}
