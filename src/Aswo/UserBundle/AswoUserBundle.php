<?php

namespace Aswo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Aswo\UserBundle\DependencyInjection\Compiler\FOSUserOverridePass;

class AswoUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new FOSUserOverridePass());
    }
}
