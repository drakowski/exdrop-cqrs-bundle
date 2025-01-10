<?php

namespace ExdropCommon\SharedCodeBundle\Multitenance\Application;

use ExdropCommon\SharedCodeBundle\Shared\Application\Service\CQRS\CommandInterface;

class RegisterNewTenant implements CommandInterface
{
    public function __construct()
    {
    }
}