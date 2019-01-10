<?php

namespace Patterns\Command;


use Patterns\AbstractIndex;
use Patterns\Command\Commands\CashCommand;
use Patterns\Command\Commands\VisaCommand;
use Patterns\Command\Receivers\CashReceiver;
use Patterns\Command\Receivers\VisaReceiver;

class Index extends AbstractIndex
{

    function index()
    {
        // create receivers
        $visaReceiver = new VisaReceiver();
        $cashReceiver = new CashReceiver();
        // create Commands and pass the related Receivers to each
        $visaCommand = new VisaCommand($visaReceiver);
        $cashCommand = new CashCommand($cashReceiver);

        // instantiate the invoker
        $invoker = new Invoker();
        // set whatever command you want
        $invoker->setCommand($cashCommand);
        // execute the command via invoker
        $invoker->executeCommand();
    }
}