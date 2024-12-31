<?php

namespace DevExdrop\CommonCodeModuleBundle\Shared\Application\Service\CQRS;

interface QueryBusInterface
{
    public function ask(QueryInterface $message): mixed;
}