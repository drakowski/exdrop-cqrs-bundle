<?php

namespace DevExdrop\CommonCodeModuleBundle\Shared\Application\Service\CQRS;

use DevExdrop\CommonCodeModuleBundle\Shared\Domain\IntegratedEvent\EventInterface;

interface EventBusInterface
{
    public function dispatch(EventInterface $event): void;
}