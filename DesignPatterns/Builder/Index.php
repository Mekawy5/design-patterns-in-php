<?php

namespace Patterns\Builder;

use Patterns\AbstractIndex;
use Patterns\Builder\Builders\MemberUserBuyerBuilder;
use Patterns\Builder\Builders\OnlinePaymentBuyerBuilder;

class Index extends AbstractIndex
{

    /*
     * in this example all builders returns object from type Buyer.
     * you can change this behaviour if the application needs each builder
     * returns different object type.
     * ex : in GuestUserBuyerBuilder class constructor you can create new GuestUserBuyer().
     */

    function index()
    {
        // Create director
        $director = new BuyerDirector();

//        // create specific builder
//        $memberUserBuilder = new MemberUserBuyerBuilder();
//        // fill builders with data through director
//        $buyer1 = $director->Build($memberUserBuilder, [
//            'user' => 'User : Mekkawy',
//            'address' => 'Some Address',
//            'payment' => 'Payment Method'
//        ]);
//        var_dump($buyer1);

        $memberUserBuilder = new OnlinePaymentBuyerBuilder();
        $buyer2 = $director->Build($memberUserBuilder, [
            'user' => 'User : Mekkawy',
            'address' => 'Some Address',
            'payment' => [
                'card_type' => 'Master Card',
                'card_num' => 'Master 12345678912345',
                'card_cvc' => '123',
                'card_expire' => '22/09'
            ]
        ]);
        var_dump($buyer2);
    }
}