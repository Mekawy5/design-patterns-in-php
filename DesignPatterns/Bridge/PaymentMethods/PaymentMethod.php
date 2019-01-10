<?php

namespace Patterns\Bridge\PaymentMethods;

use Patterns\Bridge\PaymentInterface;

abstract class PaymentMethod
{
    /**
     * @var PaymentInterface
     */
    protected $payment;


    /**
     * PaymentMethod constructor.
     * @param PaymentInterface $payment
     */
    public function __construct(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }

    abstract public function printPaymentInfo();
}