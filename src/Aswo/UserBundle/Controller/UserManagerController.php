<?php

namespace Aswo\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserManagerController extends Controller
{
    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function updateUserAction(Request $request)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $userName = $request->get('userName');
        $user = $userManager->findUserByUsername($userName);
        $userManager->deleteUser($user);

        $message = 'L\'utilisateur '.$userName.' a bien été supprimé !';
        $users = $userManager->findUsers();

        return $this->render('@FOSUser/Registration/register.html.twig', array('message' => $message, 'users' => $users));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function deleteUserAction(Request $request)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $userName = $request->get('userName');
        $user = $userManager->findUserByUsername($userName);
        $userManager->deleteUser($user);

        $message = 'L\'utilisateur '.$userName.' a bien été supprimé !';
        $users = $userManager->findUsers();

        return $this->render('@FOSUser/Registration/register.html.twig', array('message' => $message, 'users' => $users));
    }
}