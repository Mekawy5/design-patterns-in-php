<?php
namespace Patterns\FactoryMethod;

use Patterns\AbstractIndex;
use Patterns\FactoryMethod\Factory\ArabicBookFactory;
use Patterns\FactoryMethod\Factory\EnglishBookFactory;

class Index extends AbstractIndex
{
    /*
     * Each concrete factory returns specific book type (arabic- english)
     * but all concrete factories returns object of the same family (AbstractBook).
     * this is the main difference between this pattern and AbstractFactory pattern
     * in AbstractFactory each concrete factory could return objects from different families.
     * check AbstractFactory example.
     */

    function index()
    {
        // test ArabicBookFactory
        $arabicBookFactory = new ArabicBookFactory();
        $arabicBook = $arabicBookFactory->makeBook();
        echo $arabicBook->getTitle();

        echo "\n \n";

        // test EnglishBookFactory
        $englishBookFactory = new EnglishBookFactory();
        $englishBook = $englishBookFactory->makeBook();
        echo $englishBook->getTitle();
    }
}