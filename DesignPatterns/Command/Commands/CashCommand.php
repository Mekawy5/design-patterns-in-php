<?php

namespace Patterns\Command\Commands;


use Patterns\Command\Receivers\PaymentReceiver;

class CashCommand implements PaymentCommand
{
    /**
     * @var PaymentReceiver
     */
    private $receiver;


    /**
     * CashCommand constructor which should be injected with the Cash receiver.
     * @param PaymentReceiver $receiver
     */
    public function __construct(PaymentReceiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        return $this->receiver->pay();
    }
}