<?php

namespace DevExdrop\CommonCodeModuleBundle\Service\CQRS;

use Symfony\Component\Messenger\Exception\ExceptionInterface;
use Symfony\Component\Messenger\MessageBusInterface;

readonly class CommandBus implements CommandBusInterface
{
    public function __construct(private MessageBusInterface $messageBus)
    {

    }

    /**
     * @throws ExceptionInterface
     */
    public function dispatch(CommandInterface $command): void
    {
        $this->messageBus->dispatch($command);
    }
}