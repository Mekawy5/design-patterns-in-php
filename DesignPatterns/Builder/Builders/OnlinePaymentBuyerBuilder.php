<?php
namespace Patterns\Builder\Builders;

use Patterns\Builder\Buyer;
use Patterns\Builder\OnlinePayment;

class OnlinePaymentBuyerBuilder implements BuyerBuilderInterface
{
    /**
     * @var Buyer
     */
    private $buyer;

    /**
     * OnlinePaymentBuyerBuilder constructor.
     */
    public function __construct()
    {
        $this->buyer = new Buyer();
    }

    public function setUser($user)
    {
        $this->buyer->user = $user;
    }

    public function setPayment($payment)
    {
        $onlinePaymentMethod = new OnlinePayment(
            $payment['card_type'],
            $payment['card_num'],
            $payment['card_cvc'],
            $payment['card_expire']
        );
        $this->buyer->payment = $onlinePaymentMethod;
    }

    public function setAddress($address)
    {
        $this->buyer->address = $address;
    }

    public function getBuyerBuilder()
    {
        return $this->buyer;
    }
}