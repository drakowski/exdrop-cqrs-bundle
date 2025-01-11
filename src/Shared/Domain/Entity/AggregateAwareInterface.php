<?php

namespace ExdropCommon\SharedCodeBundle\Shared\Domain\Traits;

use ExdropCommon\SharedCodeBundle\Shared\Domain\IntegratedEvent\EventInterface;

interface AggregateAwareInterface
{
    public function pushEvent(EventInterface $event);
}