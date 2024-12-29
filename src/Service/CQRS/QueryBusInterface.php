<?php

namespace DevExdrop\CommonCodeModuleBundle\Service\CQRS;

interface QueryBusInterface
{
    public function ask(QueryInterface $message): mixed;
}