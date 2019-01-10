<?php

namespace Patterns\Command\Commands;


use Patterns\Command\Receivers\PaymentReceiver;

class VisaCommand implements PaymentCommand
{
    /**
     * @var PaymentReceiver
     */
    private $receiver;

    /**
     * VisaCommand constructor which should be injected with the Visa receiver..
     * @param PaymentReceiver $receiver
     */
    public function __construct(PaymentReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->pay();
    }

}