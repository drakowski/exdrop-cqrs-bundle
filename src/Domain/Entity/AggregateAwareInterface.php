<?php

namespace ExdropCQRS\Domain\Traits;

use ExdropCQRS\Domain\Event\EventInterface;

interface AggregateAwareInterface
{
    public function pushEvent(EventInterface $event);

    public function getEvents(): array;
}