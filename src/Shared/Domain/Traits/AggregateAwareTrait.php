<?php

namespace ExdropCommon\SharedCodeBundle\Shared\Domain\Traits;

use ExdropCommon\SharedCodeBundle\Shared\Domain\IntegratedEvent\EventInterface;

trait AggregateAwareTrait
{
    private array $events = [];

    public function pushEvent(EventInterface $event): void
    {
        $this->events[] = $event;
    }
}