<?php

namespace Patterns\Strategy\Strategies;


class ParseByLineStrategy implements StrategyInterface
{
    public function parse($text)
    {
        return explode("\n", $text);
    }
}