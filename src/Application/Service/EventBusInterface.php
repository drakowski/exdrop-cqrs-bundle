<?php

namespace ExdropCQRS\Application\Service;

use Domain\Event\EventInterface;

interface EventBusInterface
{
    public function dispatch(EventInterface $event): void;
}