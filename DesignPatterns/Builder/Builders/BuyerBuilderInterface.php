<?php
namespace Patterns\Builder\Builders;

interface BuyerBuilderInterface
{
    public function setUser($user); // maybe object of class user contains firstName, lastName,Age,Gender .etc
    public function setPayment($payment); // maybe object of class payment defines payment method
    public function setAddress($address); // maybe object of class address defines addresses and contact info
    public function getBuyerBuilder();
}