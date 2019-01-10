<?php

namespace Patterns\Strategy;


use Patterns\AbstractIndex;
use Patterns\Strategy\Strategies\ParseByLineStrategy;
use Patterns\Strategy\Strategies\ParseByWordStrategy;

class index extends AbstractIndex
{
    /*
     * in this pattern we need to parse string with several algorithms (by line, by word ...)
     * we created strategies implement interface (has parse() func.), and created Parser
     * class that receive concrete strategy and execute parse() on it.
     */

    function index()
    {
        $text = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
         The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
          as opposed to using 'Content here, content here',
           making it look like readable English. ";


//        // create Parser object and inject it with word parser
//        $parser = new Parser(new ParseByWordStrategy);

        // create Parser object and inject it with line parser
        $parser = new Parser(new ParseByLineStrategy);

        $parsedBody = $parser->getParsedBody($text);
        print_r($parsedBody);
    }
}