<?php

namespace Patterns\Bridge;


interface PaymentInterface
{
    public function pay($amount);
    public function getPayment();
}