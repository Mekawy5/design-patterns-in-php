<?php
namespace Patterns\AbstractFactory\Factory;


use Patterns\AbstractFactory\ArabicMySQLBook;
use Patterns\AbstractFactory\ArabicPHPBook;

class ArabicBookFactory extends AbstractBookFactory
{

    function makePHPBook()
    {
        return new ArabicPHPBook();
    }

    function makeMySQLBook()
    {
        return new ArabicMySQLBook();
    }
}