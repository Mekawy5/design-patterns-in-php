<?php

namespace Patterns\Strategy;


use Patterns\Strategy\Strategies\StrategyInterface;

class Parser
{
    /*
     * Parser class will be injected with the needed StrategyInterface implementation
     * by client, Parser knows that it needs to execute parse() on whatever implementation
     * passed to it.
     * in GO4 book this Parser called composition (page 349).
     */


    /**
     * @var StrategyInterface $strategy
     */
    private $strategy;


    /**
     * Parser constructor.
     * @param StrategyInterface $strategy
     */
    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function getParsedBody($text)
    {
        return $this->strategy->parse($text);
    }
}