<?php

namespace ExdropCommon\SharedCodeBundle\Shared\Application\Service\CQRS;

interface QueryBusInterface
{
    public function ask(QueryInterface $message): mixed;
}