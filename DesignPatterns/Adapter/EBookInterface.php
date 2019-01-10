<?php

namespace Patterns\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * returns current page and total number of pages, like [10, 100] is page 10 of 100
     *
     * @return array[]
     */

    public function getSlide(): array;
}