<?php

namespace DevExdrop\CommonCodeModuleBundle\Service\CQRS;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command): void;
}