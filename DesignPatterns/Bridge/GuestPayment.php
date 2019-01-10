<?php

namespace Patterns\Bridge;


class GuestPayment implements PaymentInterface
{
    private $amount;

    public function pay($amount)
    {
        $this->amount = $amount;
    }

    public function getPayment()
    {
        return "Guest Paid $$this->amount";
    }


}