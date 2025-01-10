<?php

namespace ExdropCommon\Shared\Application\Service\CQRS;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command): void;
}