<?php

namespace ExdropCommon\SharedCodeBundle\Shared\Application\Service\CQRS;

use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

class QueryBus implements QueryBusInterface
{
    use HandleTrait;

    public function __construct(
        MessageBusInterface $queryBus
    )
    {
        $this->messageBus = $queryBus;
    }

    public function ask(QueryInterface $message): mixed
    {
        return $this->handle($message);
    }
}