<?php

namespace Patterns\Bridge\PaymentMethods;


class FawryPayment extends PaymentMethod
{
    public function printPaymentInfo()
    {
        echo $this->payment->getPayment();
        echo "\n Paid With Fawry";
    }

}