<?php

namespace Patterns\Adapter;

/**
 * this is the adapted class. In production code, this could be a class from another package, some vendor code.
 * Notice that it uses another naming scheme and the implementation does something similar but in another way
 */

class Kindle implements EBookInterface
{
    private $slide;
    private $totalSlides = 100;

    public function unlock()
    {
        $this->slide = 1;
    }

    public function pressNext()
    {
        $this->slide ++;
    }

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return array[]
     */

    public function getSlide(): array
    {
        return [$this->slide , $this->totalSlides];
    }
}