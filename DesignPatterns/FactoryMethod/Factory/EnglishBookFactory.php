<?php

namespace Patterns\FactoryMethod\Factory;


use Patterns\FactoryMethod\EnglishBook;

class EnglishBookFactory extends AbstractBookFactory
{

    public function makeBook()
    {
        return new EnglishBook();
    }
}