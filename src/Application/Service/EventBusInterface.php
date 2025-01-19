<?php

namespace ExdropCQRS\Application\Service;

use ExdropCQRS\Domain\Event\EventInterface;

interface EventBusInterface
{
    public function dispatch(EventInterface $event): void;
}