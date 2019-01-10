<?php

namespace Patterns\Iterator\Iterators;

class ReverseArrayIterator extends \ArrayIterator
{

    /**
     * ReverseArrayIterator constructor.
     * reverse an array then pass it to the default ArrayIterator.
     */
    public function __construct(array $array)
    {
        parent::__construct(array_reverse($array));
    }
}