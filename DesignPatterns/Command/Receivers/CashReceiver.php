<?php

namespace Patterns\Command\Receivers;


class CashReceiver implements PaymentReceiver
{

    public function pay()
    {
        echo "Cash Payment Done.";
    }
}