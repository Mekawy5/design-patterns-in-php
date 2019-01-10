<?php
namespace Patterns\Builder\Builders;

use Patterns\Builder\Buyer;

class CashPaymentBuyerBuilder implements BuyerBuilderInterface
{
    /**
     * @var Buyer
     */
    private $buyer;

    /**
     * CashPaymentBuyerBuilder constructor.
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
        $this->buyer->payment = $payment;
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