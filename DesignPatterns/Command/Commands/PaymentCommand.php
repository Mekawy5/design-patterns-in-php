<?php

namespace Patterns\Command\Commands;

interface PaymentCommand
{
    /*
    * this is command interface, all commands will implement this interface
    */

    public function execute();
}