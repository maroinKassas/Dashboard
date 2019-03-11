<?php

namespace Aswo\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Aswo\UserBundle\Form\UpdateUserType;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class UserManagerController extends Controller
{
    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function updateUserAction(Request $request)
    {
        $message = '';

        $userManager = $this->container->get('fos_user.user_manager');
        $username = $request->get('userName');
        $user = $userManager->findUserByUsername($username);

        $form = $this->createForm(UpdateUserType::class);
        $form->handleRequest($request);

        var_dump($request);
        var_dump($form->isValid());
        var_dump($user);
        exit;

        if ($form->isSubmitted() && $form->isValid()) {
            $event = new FormEvent($form, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $this->userManager->updateUser($user);

            $message = 'L\'utilisateur '.$userName.' a bien été modifié !';
        }

        $users = $userManager->findUsers();
        return $this->render('@FOSUser/Registration/register.html.twig', array('message' => $message, 'users' => $users));
    }

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function deleteUserAction(Request $request)
    {
        $userManager = $this->container->get('fos_user.user_manager');
        $userNames = json_decode(stripslashes($_POST['names']));

        foreach ($userNames as $userName) {
            $user = $userManager->findUserByUsername($userName);
            $userManager->deleteUser($user);
        }

        if(count($userNames) > 1) {
            $message = 'Les utilisateurs '.$userNames.' ont bien été supprimés !';
        } else {
            $message = 'L\'utilisateur '.$userNames[0].' a bien été supprimé !';
        }

        $users = $userManager->findUsers();
        $response = new Response(json_encode
            (array(
                'users' => $users,
                'message' => $message
            ))
        );

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}