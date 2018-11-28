<?php

namespace  App\EventListener;

use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class AuthenticationSuccessListener
{
    /**
     * @param JWTCreatedEvent $event
     *
     * @return void
     */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();

        if (!$user instanceof User) {
            return;
        }

        $data['data'] = array(
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'roles' => $user->getRoles(),
        );

        $event->setData($data);
    }
}
