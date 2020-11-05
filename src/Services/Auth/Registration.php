<?php


namespace App\Services\Auth;

use App\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

class Registration
{
    /**
     * @Assert\Type(type="App\Entity\User")
     */
    protected $user;

    protected $termsAccepted;

    protected $plain;

    protected $roles;


    public function setUser(User $user)
    {
        $this->user = $user;
        $this->plain = $user->getPassword();
        $user->setRoles(['ROLE_USER']);
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function getPlain()
    {
        return $this->plain;
    }

    public function setHashPassword($hashPassword): void
    {
        $this->user->setPassword($hashPassword);
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (bool) $termsAccepted;
    }
}