<?php
namespace Patterns\AbstractFactory\Factory;


use Patterns\AbstractFactory\EnglishMySQLBook;
use Patterns\AbstractFactory\EnglishPHPBook;

class EnglishBookFactory extends AbstractBookFactory
{

    function makePHPBook()
    {
        return new EnglishPHPBook();
    }

    function makeMySQLBook()
    {
        return new EnglishMySQLBook();
    }
}