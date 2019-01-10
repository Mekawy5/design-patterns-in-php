<?php

namespace Patterns\FactoryMethod;


class ArabicBook extends AbstractBook
{

    public function getTitle()
    {
        return "Arabic Book Title";
    }
}