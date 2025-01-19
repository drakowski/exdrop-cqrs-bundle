<?php

namespace ExdropCQRS\Domain\Traits;

use ExdropCQRS\Domain\Event\EventInterface;

trait AggregateAwareTrait
{
    private array $events = [];

    public function pushEvent(EventInterface $event): void
    {
        $this->events[] = $event;
    }

    public function getEvents(): array
    {
        return $this->events;
    }
}