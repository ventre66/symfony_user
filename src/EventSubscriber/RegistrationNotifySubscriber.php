<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use App\Events;
use App\Entity\User;

/**
 * Envoi d'un email a chaque creation d'utilisateur
 *
 */
class RegistrationNotifySubscriber implements EventSubscriberInterface
{
    private $mailer;
    private $sender;

    public function __construct(\Swift_Mailer $mailer, $sender)
    {
        $this->mailer = $mailer;
        $this->sender = $sender;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            Events::USER_REGISTERED => 'onUserRegistrated'
        ];
    }

    public function OnUserRegistrated(GenericEvent $event): void
    {
        /**
         * @var User $user
         */
        $user = $event->getSubject();

        $subject = "Bienvenue";
        $body = "Bienvenue sur mon site";

        $message = (new \Swift_Message())
            ->setSubject($subject)
            ->setTo($user->getEmail())
            ->setFrom($this->sender)
            ->setBody($body, 'text/html')
        ;

        $this->mailer->send($message);
    }
}