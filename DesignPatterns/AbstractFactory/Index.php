<?php
namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\Factory\ArabicBookFactory;
use Patterns\AbstractFactory\Factory\EnglishBookFactory;
use Patterns\AbstractIndex;

class Index extends AbstractIndex
{
    // abstract factory is suitable when you want to build multible related/dependent objects
    // here, the factory ArabicBookFactory is a concrete factory of the AbstractBookFactory, which can build
    // multible related objects "ArabicPHPBook & ArabicMyQLBook" of the same family "AbstractBook"
    public function index()
    {
        echo "Test Arabic Book Factory : \n";
        $arabicBook = new ArabicBookFactory();
        $this->testConcreteFactory($arabicBook);

        echo "\n\n=========================================\n \n";

        echo "Test English Book Factory : \n";
        $englishBook = new EnglishBookFactory();
        $this->testConcreteFactory($englishBook);
    }

    private function testConcreteFactory($bookFactoryInstance){
        $arabicPHPBook = $bookFactoryInstance->makePHPBook();
        $arabicPHPBook->getTitle();echo "\n";
        $arabicPHPBook->getAuthor();echo "\n";
        echo $arabicPHPBook->type;

        echo "\n \n";

        $arabicMySQLBook = $bookFactoryInstance->makeMySQLBook();
        $arabicMySQLBook->getTitle();echo "\n";
        $arabicMySQLBook->getTitle();echo "\n";
        echo $arabicMySQLBook->type;
    }
}
