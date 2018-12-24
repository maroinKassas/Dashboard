<?php

namespace Aswo\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

final class User implements UserInterface
{
    private $idUser;
    private $userName;
    private $password;
    private $roles;

    public function __construct(?string $userName, ?string $password, array $roles = array())
    {
        if ('' === $userName || null === $userName) {
            throw new \InvalidArgumentException('The username cannot be empty.');
        }
        $this->userName = $userName;
        $this->password = $password;
        $this->roles = $roles;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function getSalt()
    {
    }

    public function eraseCredentials()
    {
    }

    public function isEqualTo(UserInterface $user)
    {
        if (!$user instanceof self) {
            return false;
        }
        if ($this->getIdUser() !== $user->getIdUser()) {
            return false;
        }
        if ($this->getUserName() !== $user->getUserName()) {
            return false;
        }
        if ($this->getPassword() !== $user->getPassword()) {
            return false;
        }
        if ($this->getSalt() !== $user->getSalt()) {
            return false;
        }
        return true;
    }
}
