<?php

namespace ExdropCQRS\Application\Service;

interface CommandBusInterface
{
    public function dispatch(CommandInterface $command): void;
}