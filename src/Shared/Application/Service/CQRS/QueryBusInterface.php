<?php

namespace ExdropCommon\Shared\Application\Service\CQRS;

interface QueryBusInterface
{
    public function ask(QueryInterface $message): mixed;
}