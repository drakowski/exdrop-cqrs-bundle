<?php

namespace ExdropCommon\SharedCodeBundle\Shared\Application\Service\CQRS;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command): void;
}