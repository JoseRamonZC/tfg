<?php

namespace App\EventSubscriber;

use Gedmo\Loggable\LoggableListener;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class DoctrineExtensionSubscriber implements EventSubscriberInterface {

    /**
     * @var LoggableListener
     */
    private $loggableListener;
    
    /*
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    public function __construct(
            LoggableListener $loggableListener,
            TokenStorageInterface $tokenStorage
    ) {
        $this->loggableListener = $loggableListener;
        $this->tokenStorage = $tokenStorage;
    }

    public static function getSubscribedEvents() {
        return [
            KernelEvents::REQUEST => 'onKernelRequest'
        ];
    }

    public function onKernelRequest(): void {
        if ($this->tokenStorage !== null &&
                $this->tokenStorage->getToken() !== null &&
                $this->tokenStorage->getToken()->isAuthenticated() === true
        ) {
            $this->loggableListener->setUsername($this->tokenStorage->getToken()->getUser());
        }
    }

}
