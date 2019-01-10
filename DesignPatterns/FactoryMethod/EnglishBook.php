<?php

namespace Patterns\FactoryMethod;


class EnglishBook extends AbstractBook
{

    public function getTitle()
    {
        return "English Book Title";
    }
}