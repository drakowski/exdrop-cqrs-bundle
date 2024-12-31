<?php

namespace DevExdrop\CommonCodeModuleBundle\Shared\Application\Service\CQRS;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command): void;
}