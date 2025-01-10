<?php

namespace ExdropCommon\SharedCodeBundle\Application\Service\CQRS;

use ExdropCommon\SharedCodeBundle\Shared\Domain\IntegratedEvent\EventInterface;

interface EventBusInterface
{
    public function dispatch(EventInterface $event): void;
}