<?php

namespace Patterns\Bridge;


class UserPayment implements PaymentInterface
{
    private $amount;

    public function pay($amount)
    {
        $this->amount = $amount;
    }

    public function getPayment()
    {
        return "User Paid $$this->amount";
    }

    public function storePayment()
    {
        return "User Payment Stored";
    }
}