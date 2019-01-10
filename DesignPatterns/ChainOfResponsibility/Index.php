<?php

namespace Patterns\ChainOfResponsibility;

use Patterns\AbstractIndex;
use Patterns\ChainOfResponsibility\Chain\ArabicBookParser;
use Patterns\ChainOfResponsibility\Chain\EnglishBookParser;

class Index extends AbstractIndex
{

    function index()
    {
        // create arabic and english books
        $book1 = new \stdClass();
        $book1->type = "Arabic";
        $book2 = new \stdClass();
        $book2->type = "English";

        // create chain and assign successors
        $parser1 = new ArabicBookParser();
        $parser2 = new EnglishBookParser();
        $parser1->setSuccessor($parser2);

        echo $parser1->parse($book2);
    }
}