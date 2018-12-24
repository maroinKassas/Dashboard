<?php

namespace Aswo\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUser implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user->setUsername('mkassas');
        $user->setPassword('maroin');

        $user->setSalt('');
        $user->setRoles(array('ROLE_USER'));

        $manager->persist($user);

        $manager->flush();
    }
}
