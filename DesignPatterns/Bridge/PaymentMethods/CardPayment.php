<?php

namespace Patterns\Bridge\PaymentMethods;


class CardPayment extends PaymentMethod
{
    public function printPaymentInfo()
    {
        echo $this->payment->getPayment();
        echo "\n Paid With Card";
    }
}