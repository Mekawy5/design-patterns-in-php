<?php

namespace Patterns\Strategy\Strategies;


class ParseByWordStrategy implements StrategyInterface
{

    public function parse($text)
    {
        return explode(" ", $text);
    }
}