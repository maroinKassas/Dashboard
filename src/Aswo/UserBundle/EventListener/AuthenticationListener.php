<?php

namespace Aswo\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\EventListener\AuthenticationListener as FOSAuthenticationListener;

class AuthenticationListener extends FOSAuthenticationListener
{

    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::RESETTING_RESET_COMPLETED => 'authenticate'
        );
    }

}