<?php

namespace ExdropCQRS\Application\Service;

interface QueryBusInterface
{
    public function ask(QueryInterface $message): mixed;
}