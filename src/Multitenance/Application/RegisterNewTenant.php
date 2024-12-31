<?php

namespace DevExdrop\CommonCodeModuleBundle\Multitenance\Application;

use DevExdrop\CommonCodeModuleBundle\Shared\Application\Service\CQRS\CommandInterface;

class RegisterNewTenant implements CommandInterface
{
    public function __construct()
    {
    }
}