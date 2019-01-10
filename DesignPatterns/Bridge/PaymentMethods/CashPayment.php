<?php

namespace Patterns\Bridge\PaymentMethods;


class CashPayment extends PaymentMethod
{
    public function printPaymentInfo()
    {
        echo $this->payment->getPayment();
        echo "\n Paid With Cash";
    }

}