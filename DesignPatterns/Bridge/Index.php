<?php

namespace Patterns\Bridge;

use Patterns\AbstractIndex;
use Patterns\Bridge\PaymentMethods\CashPayment;
use Patterns\Bridge\PaymentMethods\FawryPayment;

/*
 * In this pattern we decoupled the abstractions (GuestPayment, UserPayment) from their
 * implementations (CardPayment, CashPayment, FawryPayment) as now no need to have classes
 * like (UserCardPayment, GuestCardPayment, GuestCashPayment, GuestFawryPayment .......etc)
 * and now if we need to add new payment method (ex : CryptoPayment) no need to 2 classes
 * for it for Guest & User just one Concrete of PaymentMethod Abstraction
 */

class Index extends AbstractIndex
{

    function index()
    {
        // create User Payment
        $userPayment = new UserPayment();
        $userPayment->pay(50);

//        // now i want to proceed this payment using fawry
//        $fawryPayment = new FawryPayment($userPayment);
//        $fawryPayment->printPaymentInfo();

        // now i want to proceed this payment using Cash
        $cashPayment = new CashPayment($userPayment);
        $cashPayment->printPaymentInfo();
    }
}