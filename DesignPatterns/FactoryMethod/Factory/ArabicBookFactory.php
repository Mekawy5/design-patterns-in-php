<?php

namespace Patterns\FactoryMethod\Factory;


use Patterns\FactoryMethod\ArabicBook;

class ArabicBookFactory extends AbstractBookFactory
{

    public function makeBook()
    {
        return new ArabicBook();
    }
}