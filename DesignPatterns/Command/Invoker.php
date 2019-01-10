<?php

namespace Patterns\Command;

use Patterns\Command\Commands\PaymentCommand;

class Invoker
{
    protected $command;

    /**
     * @param mixed $command
     */
    public function setCommand(PaymentCommand $command)
    {
        $this->command = $command;
    }

    public function executeCommand(){
        $this->command->execute();
    }
}