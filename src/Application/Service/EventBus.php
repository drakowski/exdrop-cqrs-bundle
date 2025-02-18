<?php

namespace ExdropCQRS\Application\Service;

use ExdropCQRS\Domain\Event\EventInterface;
use Symfony\Component\Messenger\Exception\ExceptionInterface;
use Symfony\Component\Messenger\MessageBusInterface;

readonly class EventBus implements EventBusInterface
{
    public function __construct(private MessageBusInterface $eventBus)
    {

    }

    /**
     * @throws ExceptionInterface
     */
    public function dispatch(EventInterface $event): void
    {
        $this->eventBus->dispatch($event);
    }
}