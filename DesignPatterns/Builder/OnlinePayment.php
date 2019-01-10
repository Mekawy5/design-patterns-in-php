<?php

namespace Patterns\Builder;


class OnlinePayment
{
    private $cardType;
    private $cardNum;
    private $cardCVC;
    private $cardExpire;

    /**
     * OnlinePayment constructor.
     * @param $cardType
     * @param $cardNum
     * @param $cardCVC
     * @param $cardExpire
     */
    public function __construct($cardType, $cardNum, $cardCVC, $cardExpire)
    {
        $this->cardType = $cardType;
        $this->cardNum = $cardNum;
        $this->cardCVC = $cardCVC;
        $this->cardExpire = $cardExpire;
    }

    // operations here if needed.
}