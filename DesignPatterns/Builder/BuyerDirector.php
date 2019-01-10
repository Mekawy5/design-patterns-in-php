<?php

namespace Patterns\Builder;


use Patterns\Builder\Builders\BuyerBuilderInterface;

class BuyerDirector
{
    /**
     * @param BuyerBuilderInterface $builder
     */
    public function Build(BuyerBuilderInterface $builder, array $data)
    {
        $builder->setUser($data['user']);
        $builder->setAddress($data['address']);
        $builder->setPayment($data['payment']);
        return $builder->getBuyerBuilder();
    }
}