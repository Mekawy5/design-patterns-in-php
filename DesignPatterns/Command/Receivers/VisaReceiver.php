<?php

namespace Patterns\Command\Receivers;


class VisaReceiver implements PaymentReceiver
{

    public function pay()
    {
        if ($this->useStripe())
            echo "Visa Payment Done.";
        else
            echo "Visa Payment Failed";
    }

    private function useStripe(){
        return true;
    }
}