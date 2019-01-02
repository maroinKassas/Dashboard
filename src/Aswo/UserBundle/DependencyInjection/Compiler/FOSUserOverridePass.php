<?php
namespace Aswo\UserBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FOSUserOverridePass implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {
        $container->getDefinition('fos_user.listener.authentication')->setClass('Aswo\UserBundle\EventListener\AuthenticationListener');
        $container->getDefinition('fos_user.registration.controller')->setClass('Aswo\UserBundle\Controller\RegistrationController');
    }

}